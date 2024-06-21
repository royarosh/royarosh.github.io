
const heroChangingText = document.querySelector('[data-hero-changing-text]');
const heroChangingTextContent = ['фотограф', 'дизайнер', 'викладач'];
const heroTextAnimationDuration = 150;
function animateHeroText(i) {
    const textIndex = i >= heroChangingTextContent.length ? 0 : i;
    const currText = heroChangingTextContent[textIndex];
    heroChangingText.animate(
        [
            { transform: "rotateX(0)" },
            { transform: "rotateX(90deg)" }
        ],
        { duration: heroTextAnimationDuration, fill: 'both' }
    );
    setTimeout(() => { 
        heroChangingText.textContent = currText 
        heroChangingText.animate(
            [
                { transform: "rotateX(90deg)" },
                { transform: "rotateX(0deg)" }
            ],
            { duration: heroTextAnimationDuration, fill: 'both' }
        );
    }, heroTextAnimationDuration);
    setTimeout(() => { animateHeroText(textIndex + 1) }, 3000);
}
animateHeroText(0);