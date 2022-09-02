jQuery(document).ready(function() {

    $('.text_Move').DB_springMove({ /* h1태그 */
        
    /* 방향 */
       dir: 'x',
       mirror: 5, /* 움직이는 반경 */
       radius: 10, /* 움직이는 반경 지름 */
       motionSpeed: 0.07 /* 속도 */

    })

    $('.text_Move').text('포트폴리오'); // .text()메서드를 이용해 텍스트 내용 입력

    $('.dd1').DB_springMove({
        dir: 'y',
        mirror: 2, 
        radius: 10,
        motionSpeed: 0.07

    })
})