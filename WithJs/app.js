
const cheerio = require('cheerio')
const axios = require('axios');

const url = 'https://www.meteocity.com/france/lille-v2998324';
axios.get(url).then(resp => {
	const $ = cheerio.load(resp.data);
	const meta = $('meta[property="og:title"]')
    console.log(meta[0].attribs.content);
});
