const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

// typing animation

document.addEventListener("DOMContentLoaded", function () {
  const options = {
    strings: ['Mari Membaca, Karena Membaca Adalah Jendela Dunia', 'Bosen Baca Buku Pelajaran Terus?', 'Tenang Aja di Sini Ada Komik, Novel,Dan Lain-Lain', 'Pokoknya Disini Seru dehh😁👍' ],
    typeSpeed: 40,
    backSpeed: 500,
    backDelay: 2500,
    loop: true
  };

  const multiTextElement = document.querySelector('.multi-text');
  let currentTextIndex = 0;
  let currentText = '';
  let isDeleting = false;

  function type() {
    const fullText = options.strings[currentTextIndex];
    if (isDeleting) {
      currentText = fullText.substring(0, currentText.length - 1);
    } else {
      currentText = fullText.substring(0, currentText.length + 1);
    }

    multiTextElement.textContent = currentText;

    let typeSpeed = options.typeSpeed;
    if (isDeleting) {
      typeSpeed /= 1; // Faster when deleting
    }

    if (!isDeleting && currentText === fullText) {
      typeSpeed = options.backDelay;
      isDeleting = true;
    } else if (isDeleting && currentText === '') {
      isDeleting = false;
      currentTextIndex = (currentTextIndex + 1) % options.strings.length;
    }

    setTimeout(type, typeSpeed);
  }

  type();
});