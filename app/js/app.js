function changeContent(selectedTab) {
    if (selectedTab === 'work') {
        $('#about-control').removeClass('active');
        $('#work-control').addClass('active');
        /* Change Body Content */
        $('#work-overview').removeClass('hidden');
        $('#about-overview').addClass('hidden');
    } else if (selectedTab === 'about') {
        $('#work-control').removeClass('active');
        $('#about-control').addClass('active');
        /* Change Body Content */
        $('#work-overview').addClass('hidden');
        $('#about-overview').removeClass('hidden');
    }
};
