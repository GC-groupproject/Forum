$(window).load(function(e) {
    $(".replyButton").click(function(e) {		
        e.preventDefault();
		var $this = $(this);
		$(".writtingBox").remove();
		var topicID = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'DATA/replyBox.php',
            data: {'topicID':topicID},
			dataType:"html",
            success: function(data)
            {
                $this.parent(".topic").after(data);
            },
			failure: function()
			{
				alert("error");
			}
        });
    });
});