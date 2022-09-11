/**
 * JinyJS
 */

console.log("jinyJS Start...");
window.jiny = new Object();
jiny.version = "0.0.1";
jiny.contextMenu = null;
console.log("version: " + jiny.version);

const wrapper = document.querySelector(".wrapper");
const body = document.querySelector('body');



/** ----- ----- ----- ----- -----
 *  offCanvas
 */
 class JinyOffCanvas {
    constructor(parent){
        if(parent) {
            this.parent = parent; // offCanvas가 추가될 부모요소
        } else {
            this.parent = document.querySelector('body');
        }

        this.pos = "right"; // 위치 기본값
    }

    spinner() {
        let spinner = document.createElement('div');
        spinner.classList.add("spinner");
        let ring = document.createElement('div');
        ring.classList.add("lds-dual-ring");
        spinner.appendChild(ring);

        return spinner;
    }

    openMask() {
        // 마스크 생성
        let mask = document.createElement('div');
        mask.classList.add('jiny-modal-mask');
        mask.style.zIndex = 4000;

        mask.appendChild(this.spinner());

        // 출력 및 보이기
        document.querySelector('body').appendChild(mask);
        mask.classList.add('show');
        return mask;
    }

    position(pos){
        this.pos = pos;
        return this;
    }

    load(url){
        let mask = this.openMask();
        let pos = this.pos;

        let parent = this.parent;
        ajaxGet(url, function(data){
            let offcanvas = document.createElement("div");
            offcanvas.innerHTML = data;
            offcanvas.classList.add('jiny-offcanvas');
            if(pos == "right") {
                offcanvas.classList.add('jiny-offcanvas-right');
            }
            //console.log(pos);
            //offcanvas.firstChild.classList.add('show');
            offcanvas.classList.add('show');
            parent.appendChild(offcanvas);
            mask.remove();

            offcanvas.querySelector('.btn-close')
                .addEventListener('click',function(e){
                    e.preventDefault();
                    let target = e.target;
                    console.log(target);
                    while(!target.classList.contains('jiny-offcanvas')) {
                        target = target.parentElement;
                    }
                    console.log(target);
                    if(target.classList.contains('show')) {
                        target.classList.remove('show')
                    }
                });

        });
    }

}

/** ----- ----- ----- -----
 *  AppendChild Modal
 */
class JinyModal {
    constructor() {
        this.mask = []; // 여러개의 레이어 모달 관리
    }

    openInner(mask) {
        let modalBox = document.createElement('div');
        modalBox.classList.add('modal-inner');
        let style;
        style = "display:inline-block;";
        style += "z-index" + mask.style.zIndex + 1;
        modalBox.style = style;
        return modalBox;
    }

    confirm(message, callback, url) {
        let mask = this.openMask();
        let modalBox = this.openInner(mask);

        if(!url) {
            url = "/api/modal/confirm";
        }
        this.ajaxGet(url, function(data){
            modalBox.innerHTML = data;
            modalBox.querySelector('.message').textContent = message;

            // 중앙, 상단 20% 배치
            //let posX = (window.innerWidth - modalBox.offsetWidth)/2;
            modalBox.style = "position: fixed; top:20%; left:50%; transform: translate(-50%, 0%);";
            // + "left:"+posX+"px; top:20%";





            let confirm = modalBox.querySelector('[name="_confirm"]');
            confirm.addEventListener('click',function(e){
                if(callback) {
                    callback(); // confirm 콜백 로직 호출
                }
                mask.remove();
            });

            let cancel = modalBox.querySelector('[name="_cancel"]');
            cancel.addEventListener('click',function(e){
                mask.remove();
            });

        });

        mask.appendChild( modalBox );
    }

    openMask() {
        // 마스크 생성
        let mask = document.createElement('div');
        mask.classList.add('jiny-modal-mask');
        mask.style.zIndex = this.mask.length * 10 + 3000;
        this.mask.push(mask);

        // 출력 및 보이기
        document.querySelector('body').appendChild(mask);
        mask.classList.add('show');

        return mask;
    }

    ajaxGet(url, callback) {
        // ajax 데이터 호출
        fetch(url, {
            method: 'get'
        })
        .then(response => {
            return response.text();
        })
        .then(data => {
            callback(data);
        });
    }

}

jiny.modal = new JinyModal();

function ajaxGet(url, callback) {
    // ajax 데이터 호출
    fetch(url, {
        method: 'get'
    })
    .then(response => {
        return response.text();
    })
    .then(data => {
        callback(data);
    });
}



function _modal(url) {
    if(!url) alert("모달 popup 주소가 설정되어 있지 않습니다.");

    let mask = document.createElement('div');
    mask.classList.add('jiny-modal-mask');
    mask.classList.add('show');
    //mask.classList.add('loading');
    document.querySelector('body').appendChild(mask);


    let spinner = document.createElement('div');
    spinner.classList.add("spinner");
    let ring = document.createElement('div');
    ring.classList.add("lds-dual-ring");
    spinner.appendChild(ring);

    mask.appendChild(spinner);

    let modalBox = document.createElement('div');
    modalBox.classList.add('modal-box');
    //modalBox.style.width = "300px";
    //document.querySelector('.wrapper').appendChild( modalBox );
    mask.appendChild( modalBox );

    ajaxGet(url, function(data){
        modalBox.innerHTML = data;

        let btnClose = modalBox.querySelector(".btn-modal-close");
        console.log(btnClose);
        if(btnClose) {
            btnClose.addEventListener('click',function(){
                console.log("popup close");
                mask.remove();
            });
        }

        let form = modalBox.querySelector('form');
        ajaxSubmit(form, function(json){
            console.log(json);
            mask.remove();
        });

        spinner.remove();
        mask.classList.remove('loading');
    });

}

let modals = [];


/** ----- ----- ----- ----- ----
 *  contextMenu : 마우스 오른쪽 클릭
 */
jiny.menu = new Object();

jiny.menu.context = function(element, callback) {

}

window.pageContextMenu = null;
function _contextMenu(element, callback) {
    let contextClickPosition = function (e, contextMenu) {
         // top위치 구하기
        var top;
        if((e.clientY + contextMenu.offsetHeight)  > window.innerHeight) {
            top = window.innerHeight - contextMenu.offsetHeight ;
        } else {
            top = e.clientY;
        }
        contextMenu.style.top =  top + "px";

        // left 위치 구하기
        var left;
        //console.log(window.innerWidth);
        //console.log(e.clientX);
        //console.log(contextMenu.offsetWidth);

        if((e.clientX + contextMenu.offsetWidth) > window.innerWidth) {
            left = window.innerWidth - contextMenu.offsetWidth - 20;
        } else {
            left = e.clientX;
        }
        contextMenu.style.left = left + 'px';
        //console.log(contextMenu.style.left);
    }

    element.addEventListener('contextmenu', function(e){
        e.preventDefault();
        console.log('context click');

        if(window.pageContextMenu) { window.pageContextMenu.remove(); }

        let contextMenu = callback(e);
        if(contextMenu) {
            window.pageContextMenu = contextMenu; // 삭제를 위해서 캐시로 저장

            // context Menu활성화
            document.querySelector("body").appendChild(contextMenu);
            contextMenu.style.display = 'block';
            contextClickPosition(e, contextMenu);
        }
    });

    window.addEventListener('click', function(e){
         // 배경 클릭시 contextMenu 닫기
        if(window.pageContextMenu) {
            console.log("contextMenu 제거");
            window.pageContextMenu.remove();
            window.pageContextMenu = null;
        }
    });
}


