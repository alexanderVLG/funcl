 $('.sl').slick({
	 autoplay: true,
	 autoplaySpeed: 3000,
	 speed: 1000,
	 cssEase: 'ease-in',
	 dots: true,
	 arrows: false,
	 pauseOnDotsHover: true,
 });

$('.brand').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 800,
    cssEase: 'ease-in',
    centerMode: true,
    centerPadding: '20px',
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1095,
            settings: {
                arrows: false,
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: false,
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            }
        }
    ]
})
