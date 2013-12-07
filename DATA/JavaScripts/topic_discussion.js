$(window).load(function(e) {
    $(".replyButton").click(function(e) {		
        e.preventDefault();
		$(".writtingBox").remove();
		var $this = $(this);
		var topic = $this.attr('topic');
		var page = $this.attr('page');
        $.ajax({
            type: "POST",
            url: 'DATA/replyBox.php',
            data: {topicID:topic, endPage:page},
			dataType:"html",
            success: function(data)
            {
                $this.parent(".topic").after(data);
				$('.writtingBox textarea').focus();
            },
			failure: function()
			{
				alert("error");
			}
        });
    });
});