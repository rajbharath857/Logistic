const html = `<h3 class="logico-title">Worldwide air freight service\n</h3>`;
const regex = /(^|<\/?[^>]+>|\s+)([^\s<]+)/g;

let innerHTML = `Worldwide air freight service\n`;

console.log("Original:", innerHTML);

innerHTML = innerHTML.replace(regex, '$1<span class="word">$2</span>');
console.log("Run 1:", innerHTML);

// Simulate the letter wrapping
innerHTML = innerHTML.replace(/>([^<]+)</g, (match, text) => {
    return '>' + text.replace(/\S/g, '<span class="letter">$&</span>') + '<';
});
console.log("Run 1 after letters:", innerHTML);

innerHTML = innerHTML.replace(regex, '$1<span class="word">$2</span>');
console.log("Run 2:", innerHTML);

// Simulate the letter wrapping again
innerHTML = innerHTML.replace(/>([^<]+)</g, (match, text) => {
    return '>' + text.replace(/\S/g, '<span class="letter">$&</span>') + '<';
});
console.log("Run 2 after letters:", innerHTML);
