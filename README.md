# JinyERP v1
`지니TMS`는 웹기반의 오픈소스 문서를 협업하여 번역을 관리할 수 있는 프로젝트 입니다.

## 설치 및 실행
- 컴포저를 이용하여 지니TMS를 설치합니다.

```
composer create-project jinyerp/jinytms 프로젝트
```

- 지니TMS는 기본적인 UI로 tailwind css를 이용하고 있습니다. nodejs의 npm 명령을 통하여
tailwind css와 리소스를 컴파일 합니다.

```
npm install && npm run build
```

> ui 리소스 컴파일 대신에 개발용 watch 형태로 실행할 수도 있습니다.
```
npm install && npm run dev
```

- php의 내장서버를 통하여 지니ERP를 실행합니다.
```
php artisan serve
```

## 데이터베이스 설정
지니TMS는 라라벨 프레임워크를 기반으로 개발되었습니다. 라라벨의 `.env` 파일을 생성하여 데이터베이스 접속 정보를 설정합니다.
`.env` 파일은 서비스의 민간함 정보들을 담고 있기 때문에 깃으로 관리되지 않습니다. `.env.example` 파일을 복사하여 사용하시면 됩니다.


## 모듈 설치하기
지니TMS는 기능들이 다양한 모듈들로 분리되어 개발 유지 관리되고 있습니다.



