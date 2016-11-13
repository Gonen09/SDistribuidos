$(document).ready(function () {
                $('#list').click(function(event){event.preventDefault();$('#productos .item').addClass('list-group-item');});
                $('#grid').click(function(event){event.preventDefault();$('#productos .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
                $('.dropdown-toggle').dropdown();
});