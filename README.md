# inch_traffic_gnu

법무법인 동주 **음주·교통** 랜딩·홍보용 그누보드(GNU Board) 기반 사이트입니다. 메인 인덱스는 경량 파셜 구조로 구성하고, 일부 게시판·공식 도메인과 연동합니다.

## 스택

- PHP + **그누보드 5**
- 커스텀 테마: `theme/basic/`
- 메인 섹션: `partials/sections/`
- 대표 에셋: `assets/css/` (`index-lcp.css`, `common.css` 등)

## 요구 사항

- PHP 7.x 이상 (그누보드 호환 버전)
- MyQSL / MariaDB
- 웹 서버(Apache 또는 Nginx + PHP-FPM)

## 로컬 설정

1. 저장소 클론 후 웹 루트에 두거나 가상 호스트를 설정합니다.
2. DB를 준비하고 그누보드 설치 절차를 진행하거나, 기존 덤프를 복원합니다.
3. 데이터베이스 설정:

   ```bash
   cp data/dbconfig.example.php data/dbconfig.php
   ```

   `data/dbconfig.php`에서 MySQL 접속 정보, `G5_TOKEN_ENCRYPTION_KEY`, 필요 시 네이버 캡차 키를 입력합니다.  
   **`data/dbconfig.php`는 Git에 올라가지 않습니다.** 키·비밀번호는 공유하지 마세요.

4. (선택) `extend/user.config.php`에서 환경별 리다이렉트·추가 설정을 조정합니다.

## 디렉터리 메모

| 경로 | 설명 |
|------|------|
| `index.php` | 메인 랜딩, `$sections`로 섹션 순서 제어 |
| `partials/sections/` | 히어로, 상담, 사례, 후기, 미디어, 오시는 길 등 |
| `_menu.php` | GNB(공식 사이트 링크 등) |
| `theme/basic/head.sub.php` | 메타·구조화 데이터·SEO 관련 |
| `extend/user.config.php` | 사용자 확장 설정 |

## Docker

로컬이 Docker 기반이면 `docker-compose`의 DB 호스트명(예: `db`)을 `G5_MYSQL_HOST`에 맞춥니다.

## 라이선스 · 원저작

그누보드 및 사용 중인 스킨·라이브러리는 각각의 라이선스를 따릅니다.  
법무 관련 문구·브랜딩은 **법무법인 동주** 정책에 맞게 사용하세요.

## 원격 저장소

```text
https://github.com/mmidellla-blip/inch_traffic_gnu.git
```
