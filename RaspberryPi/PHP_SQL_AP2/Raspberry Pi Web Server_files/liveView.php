(function () {
	function getUrl()
	{
		var url = '';

		try
		{
			if (window.top == window)
			{
				url = window.location.href;
			}
			else
			{
				try
				{
					url = window.top.location.href;
				}
				catch (e2)
				{
					url = document.referrer;
				}
			}
		}
		catch(e1) {}

		return url;
	}

	var url = 'http://live.sekindo.com/live/liveView.php?s=70152&subId=213_4023&pubUrl=instructables.com&cbuster=9b1f3cad6c11589f43e29495e5dfc77d&eximpid=9b1f3cad6c11589f43e29495e5dfc77d_213_GB_instructables.com_4023&nofr=1' + '&pubUrlAuto=' + encodeURIComponent(getUrl());
	document.write(unescape("%3Cscript src='") + url + unescape("' type='text/javascript'%3E%3C/script%3E"));
})();
