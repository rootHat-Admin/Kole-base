// ===== 1. НАХОДИМ ЭЛЕМЕНТЫ =====
const cards = document.querySelectorAll('.article-card');
const burger = document.getElementById('burgerBtn');
const nav = document.getElementById('mainNav');

// ===== 2. БУРГЕР МЕНЮ =====
burger.addEventListener('click', () => {
  nav.classList.toggle('open');
});

// ===== 3. ДРОПДАУН - закрытие при клике вне =====
const dropdownParent = document.querySelector('.has-dropdown');

document.querySelector('.dropdown-toggle').addEventListener('click', (e) => {
  e.preventDefault();
  dropdownParent.classList.toggle('open');
});

document.addEventListener('click', (e) => {
  if (!dropdownParent.contains(e.target)) {
    dropdownParent.classList.remove('open');
  }
});

// ===== 4. ФИЛЬТР =====
function filter(type) {
  cards.forEach(card => {
    card.style.display =
      (type === 'all' || card.dataset.category === type) ? 'block' : 'none';
  });
}

// ===== 5. ОДИН ОБРАБОТЧИК ДЛЯ ВСЕХ ФИЛЬТРОВ =====
document.querySelectorAll('.filter-item').forEach(function(item) {
  item.addEventListener('click', function(e) {
    e.preventDefault();
    filter(this.dataset.cat);

    const dropdown = this.closest('.has-dropdown');
    if (dropdown) dropdown.classList.remove('open');
  }); 
});

// ===== 6. ФОРМА =====
document.querySelector('.contact-form').addEventListener('submit', (e) => {
  e.preventDefault();
  alert('Отправлено!');
  e.target.reset();
});