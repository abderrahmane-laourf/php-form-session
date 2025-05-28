<?php
session_start();

// Use null coalescing operator for cleaner variable assignment
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Sanitize name before storing in session, though htmlspecialchars will be used on output
// For security, consider more robust validation/sanitization if this data is used elsewhere
if (!empty($name)) {
    $_SESSION['username'] = trim(strip_tags($name)); // Basic sanitization
}

// Provide default values if data is empty, for better display
$display_email = !empty($email) ? htmlspecialchars($email) : 'Non fourni';
$display_message = !empty($message) ? nl2br(htmlspecialchars($message)) : 'Aucun message';
$display_username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : '';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmation de Message</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Optional: Add a subtle background pattern or keep it clean */
    body {
      /* background-image: url('your-subtle-pattern.svg'); */
    }
    /* Custom scrollbar for message if it gets very long (Tailwind doesn't style scrollbars by default) */
    .message-content::-webkit-scrollbar {
      width: 8px;
    }
    .message-content::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }
    .message-content::-webkit-scrollbar-thumb {
      background: #cbd5e1; /* slate-300 */
      border-radius: 10px;
    }
    .message-content::-webkit-scrollbar-thumb:hover {
      background: #94a3b8; /* slate-400 */
    }
  </style>
</head>
<body class="bg-gradient-to-br from-slate-900 to-slate-700 font-sans min-h-screen flex items-center justify-center p-4 sm:p-6">

  <div class="bg-white p-6 sm:p-10 rounded-xl shadow-2xl w-full max-w-lg transform transition-all hover:scale-[1.01] duration-300">

    <?php if ($display_username): ?>
      <h1 class="text-3xl sm:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 mb-8 text-center">
        Bienvenue, <?= $display_username ?> !
      </h1>
    <?php else: ?>
      <h1 class="text-3xl sm:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 mb-8 text-center">
        Message Reçu !
      </h1>
    <?php endif; ?>

    <div class="space-y-6">
      <div>
        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Email</p>
        <p class="text-slate-700 bg-slate-50 p-3 rounded-lg shadow-sm break-words">
          <?= $display_email ?>
        </p>
      </div>

      <div>
        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Message</p>
        <div class="text-slate-700 bg-slate-50 p-3 rounded-lg shadow-sm min-h-[100px] max-h-[250px] overflow-y-auto message-content prose prose-sm max-w-none">
          <?= $display_message ?>
        </div>
      </div>
    </div>

    <div class="mt-10 text-center">
      <a href="formilaire.php"
         class="inline-block bg-gradient-to-r from-purple-600 to-pink-500 hover:from-purple-700 hover:to-pink-600 text-white font-semibold py-3 px-8 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-opacity-60">
        Retour au formulaire
      </a>
    </div>

  </div>
  <script>
    // Small script to add a subtle animation on load for the card
    document.addEventListener('DOMContentLoaded', () => {
      const card = document.querySelector('.bg-white');
      if (card) {
        card.classList.add('opacity-0', 'translate-y-3');
        setTimeout(() => {
          card.classList.remove('opacity-0', 'translate-y-3');
          card.classList.add('opacity-100', 'translate-y-0');
        }, 100); // Slight delay
      }
    });
  </script>
</body>
</html>