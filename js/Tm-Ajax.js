//realtime

function DatiRealtime(type)
{
	this.type = type;
	this.RawFile = '';
	this.Path = '';
	this.RawData = getRawData;
  this.Update = UpdateDivData;
}

function UpdateDivData(UsrReq) {
      $.ajax({
	    async: false,
        method: 'post',
        url : this.RawFile,
        data: {'Req': UsrReq, 'Path': this.Path},
        success: function (data)
		{
			document.getElementById(UsrReq).innerHTML= data;
		}
		});
   	}

function getRawData(UsrReq) {
	var Output
      $.ajax({
	    async: false,
        method: 'post',
        url : this.RawFile,
        data: {'Req': UsrReq, 'Path': this.Path},
        success: function (data)
		{
			if(data.indexOf('.')>0)
			{
			Output = parseFloat(data);
			}
			else
			{
			Output = parseInt(data);
			}
			}
		});
        return Output;
   	}


		// storico

		function DatiStorico(type)
		{
			this.type = type;
			this.RawFile = '';
			this.Path1 = '';
			this.Path2 = '';
			this.RawData = getRawDataStoria;
			this.Update = UpdateDivDataStoria;
		}

		function UpdateDivDataStoria(UsrReq) {
			$.ajax({
				async: true,
				method: 'post',
				url : this.RawFile,
				data: {'Req': UsrReq, 'Path1': this.Path1, 'Path2': this.Path2},
				success: function (data)
				{
					document.getElementById(UsrReq).innerHTML= data;
				}
			});
		}

		function getRawDataStoria(UsrReq) {
			var Output
			$.ajax({
				async: false,
				method: 'post',
				url : this.RawFile,
				data: {'Req': UsrReq, 'Path1': this.Path1, 'Path2': this.Path2},                success: function (data)
				{

					Output = JSON.parse(data);
				}
			});
			return Output;
		}
