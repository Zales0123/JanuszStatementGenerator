'use strict';

import fs from 'fs';

let data = fs.readFileSync('data.json');
let parsedData = JSON.parse(data);

console.log(
    parsedData.introductions[Math.floor(Math.random()*parsedData.introductions.length)]+
    parsedData.who[Math.floor(Math.random()*parsedData.who.length)]+
    parsedData.how[Math.floor(Math.random()*parsedData.how.length)]+
    parsedData.what[Math.floor(Math.random()*parsedData.what.length)]+
    parsedData.why[Math.floor(Math.random()*parsedData.why.length)]+
    parsedData.culminations[Math.floor(Math.random()*parsedData.culminations.length)]
);
