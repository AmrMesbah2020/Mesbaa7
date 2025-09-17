import './bootstrap';

import quotes from './quotes.js';

// Pick a random quote
const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];

// Display it if element exists
const quoteBox = document.getElementById('quote-box');
if (quoteBox) {
    quoteBox.innerText = `"${randomQuote}"`;
}
