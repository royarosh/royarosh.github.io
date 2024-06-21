const navMobileMenuBtn = document.querySelector('nav .mobile-menu-btn');

navMobileMenuBtn.addEventListener('click', toggleNav);
document.querySelectorAll('nav .menu a').forEach(a => {
    if (window.innerWidth <= 800) a.onclick = () => { toggleNav() };
});

function toggleNav() {
    if (navMobileMenuBtn.src.includes('x.svg')) { 
        navMobileMenuBtn.src = './static/img/icons/menu.svg';
        document.querySelector('nav .menu').animate(
            [
                { opacity: 1 },
                { opacity: 0 }
            ],
            { duration: 150, fill: 'both' }
        );
        setTimeout(() => { document.querySelector('nav .menu').classList.toggle('open') }, 150);
    } else {
        document.querySelector('nav .menu').classList.toggle('open');
        navMobileMenuBtn.src = './static/img/icons/x.svg';
        document.querySelector('nav .menu').animate(
            [
                { opacity: 0 },
                { opacity: 1 }
            ],
            { duration: 150, fill: 'both' }
        );
    }
}


const heroChangingText = document.querySelector('[data-hero-changing-text]');
const heroChangingTextContent = ['фотограф', 'дизайнер', 'викладач'];
const heroTextAnimationDuration = 150;
function animateHeroText(i) {
    const textIndex = i >= heroChangingTextContent.length ? 0 : i;
    const currText = heroChangingTextContent[textIndex];
    heroChangingText.animate(
        [
            { transform: 'rotateX(0)' },
            { transform: 'rotateX(90deg)' }
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


const contactForm = document.querySelector('#contact form');
const regularValue = document.querySelector('#regular-inp').value;
const contactResEl = document.querySelector('#contact-res');
const chatID = '1773718260';

contactForm.onsubmit = e => {
    e.preventDefault();
    
    const contactExpiry = +localStorage.getItem('contact-tries-expiry') || 0;
    const contactTries = +localStorage.getItem('contact-tries') || 0;
    if (contactTries >= 3) {
        const currentTime = Date.now();
        const timeDifference = contactExpiry - currentTime;

        if (timeDifference > 0) {
            const hoursLeft = Math.floor(timeDifference / (1000 * 60 * 60)).toString().padStart(2, '0');
            const minutesLeft = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
            contactResEl.textContent = `Ти не можеш контактувати більше трьох разів на добу. Спробуй знову через ${hoursLeft}:${minutesLeft}`;
            contactResEl.classList.add('err');
            return;
        }
    }

    const formData = new FormData();
    formData.append('chat_id', chatID);
    formData.append('parse_mode', 'Markdown');
    formData.append('text', `
‼️ ***Контактування***
___- ${contactForm.subject.value}___

· Імʼя: \`${contactForm.name.value}\`
· Контакти: \`${contactForm.email.value}\`
· Повідомлення:
${contactForm.message.value}
    `);
    
    fetch(`https://api.telegram.org/bot${regularValue}/sendMessage`, {
        method: 'POST',
        body: formData
    }).then(response => {
        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
        return response.json();
    }).then(_ => {
        contactForm.reset();
        contactResEl.textContent = 'Повідомлення надіслано! Я звʼяжуся з тобою впродовж 8-ми годин.';
        localStorage.setItem('contact-tries', contactTries + 1);
        // localStorage.setItem('contact-tries-expiry', Date.now() + 24 * 3600_000);
        const currentDate = new Date();
        currentDate.setDate(currentDate.getDate() + 1);
        currentDate.setHours(0, 0, 0, 0);
        const expiryTimestamp = currentDate.getTime();
        localStorage.setItem('contact-tries-expiry', expiryTimestamp.toString());
    }).catch(_ => {
        contactResEl.textContent = 'Упс... Щось пішло не так, спробуй ще раз.';
        contactResEl.classList.add('err');
    });
}