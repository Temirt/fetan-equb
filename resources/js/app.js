import './bootstrap';

// Canvas Glowing Line Animation
document.addEventListener('DOMContentLoaded', () => {
    initHeroLineCanvas();
    initEqubCalculator();
    initModal();
    initFaqAccordion();
    initMobileMenu();
});

function initHeroLineCanvas() {
    const canvas = document.getElementById('heroLineCanvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width = (canvas.width = canvas.parentElement.offsetWidth || window.innerWidth);
    let height = (canvas.height = canvas.parentElement.offsetHeight || 600);

    window.addEventListener('resize', () => {
        if (!canvas.parentElement) return;
        width = canvas.width = canvas.parentElement.offsetWidth;
        height = canvas.height = canvas.parentElement.offsetHeight;
    });

    let step = 0;
    const particles = [];
    for (let i = 0; i < 40; i++) {
        particles.push({
            x: Math.random() * width,
            y: height / 2 + (Math.random() - 0.5) * 80,
            radius: Math.random() * 2 + 1,
            speed: Math.random() * 1.5 + 0.5,
            alpha: Math.random() * 0.7 + 0.3,
        });
    }

    function animate() {
        ctx.clearRect(0, 0, width, height);

        // Deep glowing ambient gradient
        const ambientGrad = ctx.createRadialGradient(width / 2, height / 2, 50, width / 2, height / 2, width / 1.5);
        ambientGrad.addColorStop(0, 'rgba(16, 185, 129, 0.12)');
        ambientGrad.addColorStop(0.5, 'rgba(6, 78, 59, 0.05)');
        ambientGrad.addColorStop(1, 'rgba(2, 24, 13, 0)');
        ctx.fillStyle = ambientGrad;
        ctx.fillRect(0, 0, width, height);

        step += 0.02;

        // Draw multiple glowing harmonic waves
        drawWave(height / 2, 35, 0.005, step, 'rgba(250, 204, 21, 0.15)', 8);
        drawWave(height / 2, 25, 0.008, step * 1.2 + 1, 'rgba(52, 211, 153, 0.25)', 5);
        drawWave(height / 2, 18, 0.006, step * 0.8 + 2, 'rgba(255, 255, 255, 0.4)', 3);
        // The core bright infinite glowing gold & white line
        drawWave(height / 2, 12, 0.004, step * 1.5, 'rgba(254, 240, 138, 0.95)', 2, true);

        // Render traveling light pulses / particles along the infinite line
        particles.forEach(p => {
            p.x += p.speed;
            if (p.x > width) {
                p.x = 0;
            }
            const waveY = height / 2 + Math.sin(p.x * 0.004 + step * 1.5) * 12;

            ctx.beginPath();
            ctx.arc(p.x, waveY, p.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(253, 224, 71, ${p.alpha})`;
            ctx.shadowColor = '#facc15';
            ctx.shadowBlur = 10;
            ctx.fill();
        });

        requestAnimationFrame(animate);
    }

    function drawWave(baseY, amplitude, frequency, phase, strokeColor, lineWidth, isCore = false) {
        ctx.save();
        ctx.beginPath();
        ctx.lineWidth = lineWidth;
        ctx.strokeStyle = strokeColor;
        if (isCore) {
            ctx.shadowColor = '#fef08a';
            ctx.shadowBlur = 25;
        }

        for (let x = 0; x <= width; x += 3) {
            const y = baseY + Math.sin(x * frequency + phase) * amplitude + Math.cos(x * 0.002 + phase * 0.5) * (amplitude * 0.4);
            if (x === 0) {
                ctx.moveTo(x, y);
            } else {
                ctx.lineTo(x, y);
            }
        }
        ctx.stroke();
        ctx.restore();
    }

    animate();
}

function initEqubCalculator() {
    const goalSelect = document.getElementById('calcGoal');
    const customAmountInput = document.getElementById('calcCustomAmount');
    const dailySlider = document.getElementById('calcDailySlider');
    const dailyDisplay = document.getElementById('calcDailyDisplay');
    const targetDisplay = document.getElementById('calcTargetDisplay');
    const daysDisplay = document.getElementById('calcDaysDisplay');
    const dateDisplay = document.getElementById('calcDateDisplay');
    const speedupDisplay = document.getElementById('calcSpeedupDisplay');

    if (!goalSelect || !dailySlider) return;

    function updateCalculator() {
        let targetAmount = parseFloat(goalSelect.value);
        if (goalSelect.value === 'custom') {
            if (customAmountInput) customAmountInput.classList.remove('hidden');
            targetAmount = parseFloat(customAmountInput ? customAmountInput.value : 100000) || 50000;
        } else {
            if (customAmountInput) customAmountInput.classList.add('hidden');
        }

        const dailyRate = parseFloat(dailySlider.value);
        if (dailyDisplay) dailyDisplay.textContent = dailyRate.toLocaleString() + ' ETB';
        if (targetDisplay) targetDisplay.textContent = targetAmount.toLocaleString() + ' ETB';

        // Base days needed if solo
        let baseDays = Math.ceil(targetAmount / dailyRate);

        // Open-line network velocity multiplier (because open line pools thousands of contributors)
        // Network acceleration cuts waiting time down substantially
        let networkFactor = 0.35; // 65% faster due to aggregated open line pool
        let effectiveDays = Math.max(14, Math.round(baseDays * networkFactor));

        if (daysDisplay) daysDisplay.textContent = effectiveDays + ' Days';

        const payoutDate = new Date();
        payoutDate.setDate(payoutDate.getDate() + effectiveDays);
        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        if (dateDisplay) dateDisplay.textContent = payoutDate.toLocaleDateString(undefined, options);

        // Speedup calculation
        const speedupPercent = Math.round((1 - (effectiveDays / baseDays)) * 100);
        if (speedupDisplay) speedupDisplay.textContent = (speedupPercent > 0 ? speedupPercent : 65) + '% Faster than solo saving';
    }

    goalSelect.addEventListener('change', updateCalculator);
    if (customAmountInput) customAmountInput.addEventListener('input', updateCalculator);
    dailySlider.addEventListener('input', updateCalculator);

    updateCalculator();
}

function initModal() {
    const openBtns = document.querySelectorAll('[data-open-equb-modal]');
    const modal = document.getElementById('equbModal');
    const closeBtn = document.getElementById('closeModalBtn');
    const modalForm = document.getElementById('modalEqubForm');
    const modalSuccess = document.getElementById('modalSuccessState');

    if (!modal) return;

    openBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        });
    });

    const closeModal = () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
        if (modalForm && modalSuccess) {
            modalForm.classList.remove('hidden');
            modalSuccess.classList.add('hidden');
            modalForm.reset();
        }
    };

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    if (modalForm) {
        modalForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = modalForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-emerald-950 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" stroke-width="4" d="M4 12a8 8 0 018-8v8H4z"></path>
                </svg>
                Processing...
            `;

            const formData = new FormData(modalForm);
            try {
                const response = await fetch('/api/register-equb', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                const data = await response.json();
                if (data.success) {
                    modalForm.classList.add('hidden');
                    modalSuccess.classList.remove('hidden');
                    const resLine = document.getElementById('resLineNumber');
                    const resPayout = document.getElementById('resPayoutDate');
                    if (resLine) resLine.textContent = data.data.line_number;
                    if (resPayout) resPayout.textContent = data.data.payout_projection;
                }
            } catch (err) {
                console.error(err);
                alert('Connection error. Please try again.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
    }
}

function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-toggle');
    faqItems.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            const isOpen = !content.classList.contains('hidden');

            // Close all first if needed
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = 'rotate(0deg)');

            if (!isOpen) {
                content.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}

function initMobileMenu() {
    const menuBtn = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    if (!menuBtn || !mobileMenu) return;

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
}
