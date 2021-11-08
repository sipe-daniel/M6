
const request = require('request');
const jsdom = require('jsdom');

const req_url = 'https://www.meteocity.com/france/lille-v2998324';

request({uri: req_url}, function(error, response, body){
	if(!error && response.statusCode == 200){
    const dom = new jsdom.JSDOM(body);

    const element = dom.window.document.getElementsByTagName('meta')

   let result;
   for (let i = 0; i < element.length; i++) {
     if(element[i].getAttribute('name') == 'twitter:title'){
       result = element[i].getAttribute('content')
     }
   }
	 console.log(result)
	}
});
