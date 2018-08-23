$(function () {
// ------- Form Group Operations:      
//        Form Label Highlights
    $('.contact-form-group').on('focus', '.form-control', function () { 
        $(this).parent().find('label').removeClass('label');
        $(this).parent().find('label').addClass('labelFocus');
    });
    $('.contact-form-group').on('blur', '.form-control', function () { 
        $(this).parent().find('label').removeClass('labelFocus');
        $(this).parent().find('label').addClass('label');
    });
//      Account Info Update Form
    $('.accountManage').on('click', '#manageAccount', function () {
        if (confirm('Are you sure you want to change your account information?')) {
            $(this).parent().siblings().find('.accountView').find('p').css('display', 'none');
            $(this).css('display', 'none');
            $(this).parent().siblings().find('.accountView').find('.form-control').css('display', 'inline-block');
            $(this).next().css('display', 'inline-block');
            $(this).next().next().css('display', 'inline-block');
        }   
    });
//      Profile Info Update Form
    $('.profileManage').on('click', '#manageProfile', function () {
        if (confirm('Are you sure you want to change your profile information?')) {
            $(this).parent().parent().css('display', 'none');
            $(this).css('display', 'none');
            $(this).parent().parent().next().css('display', 'block');
        }
    });
//      Manage the team member selection form and styling
    $.support.transition = false
    $('.teamBackground').on('click', function () {
        var href = $(this).next().attr('href').slice(7);
        var info = $(this).html();
        var $accordian = $('#accordian');
        $('.emailId').val(href);
        $('.emailToRecipient').html(info);
        $('.teamBackground').removeClass('teamHighlight');
        $(this).addClass('teamHighlight');
        $accordian.find('.collapse.in').collapse('hide');
    });
//      Carousel Initiation
    $('#imageCarousel').carousel( {
        interval: 4000
    });
//      Media File Dropdown test
    $('.dropdown-toggle').dropdown();
    $('.dropdown input, .dropdown label').click(function (e) { 
        e.stopPropagation() ;
    });
});