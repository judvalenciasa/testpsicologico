@php
    $sessionLifetimeMinutes = (int) config('session.lifetime', 120);
    $warningBeforeExpirationMinutes = min(10, max(1, $sessionLifetimeMinutes - 1));
    $warningDelayMs = max(0, ($sessionLifetimeMinutes - $warningBeforeExpirationMinutes) * 60 * 1000);
    $expirationDelayMs = max(0, $sessionLifetimeMinutes * 60 * 1000);
@endphp

<div id="session-expiration-warning" role="alert" aria-live="assertive" style="display: none;"
    data-warning-delay="{{ $warningDelayMs }}" data-expiration-delay="{{ $expirationDelayMs }}">
    <div class="session-expiration-warning__card">
        <strong>Tu sesión está por expirar</strong>
        <p>
            El token de seguridad puede vencer pronto por inactividad. Para evitar perder tus respuestas,
            envía esta pantalla antes de que termine el tiempo.
        </p>
        <p class="session-expiration-warning__time">
            Tiempo aproximado restante: <span id="session-expiration-countdown"></span>
        </p>
        <button type="button" id="session-expiration-warning-close">Entendido</button>
    </div>
</div>

<style>
    #session-expiration-warning {
        position: fixed;
        right: 20px;
        bottom: 20px;
        z-index: 9999;
        max-width: 380px;
        font-family: Arial, sans-serif;
    }

    .session-expiration-warning__card {
        background: #fff8e1;
        border: 1px solid #f2c94c;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        color: #4f3b00;
        padding: 16px;
    }

    .session-expiration-warning__card strong {
        display: block;
        font-size: 18px;
        margin-bottom: 8px;
    }

    .session-expiration-warning__card p {
        margin: 0 0 10px;
    }

    .session-expiration-warning__time {
        font-weight: 700;
    }

    #session-expiration-warning-close {
        background: #163c66;
        border: 0;
        border-radius: 6px;
        color: #fff;
        cursor: pointer;
        font-weight: 700;
        padding: 8px 12px;
    }
</style>

<script>
    (function () {
        var warning = document.getElementById('session-expiration-warning');
        var warningDelay = Number(warning.dataset.warningDelay || 0);
        var expirationDelay = Number(warning.dataset.expirationDelay || 0);
        var countdown = document.getElementById('session-expiration-countdown');
        var closeButton = document.getElementById('session-expiration-warning-close');
        var expiresAt = Date.now() + expirationDelay;

        function formatRemainingTime(milliseconds) {
            var totalSeconds = Math.max(0, Math.ceil(milliseconds / 1000));
            var minutes = Math.floor(totalSeconds / 60);
            var seconds = totalSeconds % 60;

            return minutes + ' min ' + String(seconds).padStart(2, '0') + ' seg';
        }

        function updateCountdown() {
            if (!countdown) {
                return;
            }

            countdown.textContent = formatRemainingTime(expiresAt - Date.now());
        }

        function showWarning() {
            if (!warning) {
                return;
            }

            updateCountdown();
            warning.style.display = 'block';
            setInterval(updateCountdown, 1000);
        }

        if (closeButton) {
            closeButton.addEventListener('click', function () {
                warning.style.display = 'none';
            });
        }

        setTimeout(showWarning, warningDelay);
    })();
</script>
