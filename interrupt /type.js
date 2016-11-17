var str = "<p>Boisterous’-One word that describes Interrupt’<br>15 best. As always, the symposium had<br> surpassed the expectations and set the bar<br> really high making it even more challenging for<br> the subsequent years to come. There were multiple online and offline events covering both the technical and non-technical side. The workshop on web development helped the students explore this wide arena. Numbers say a lot more than words. So, seeing how there were about 1500 students who participated from across the country, this event was a huge success.Here we go INTERRUPTing a calm day again. Presenting the wildest and most viral sensation since cat videos and North West, Interrupt’16 is back-bigger and better than ever! Flying grenades, flipping ninjas and Chuck Norris all over town. Become the Sherlock Holmes through our hintforage, or be namma ooru “Dennis Ritchie” in coding. Idhu just trailer kannu,come see the real picture on the 3rd of September at SVCE.</p>",,
    i = 0,
    isTag,
    text;

(function type() {
    text = str.slice(0, ++i);
    if (text === str) return;
    
    document.getElementById('typewrite').innerHTML = text;

    var char = text.slice(-1);
    if( char === '<' ) isTag = true;
    if( char === '>' ) isTag = false;

    if (isTag) return type();
    setTimeout(type, 80);
}());