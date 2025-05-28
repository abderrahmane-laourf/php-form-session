<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Modern Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Optional: For custom scrollbar if textarea gets very long */
    textarea::-webkit-scrollbar {
      width: 8px;
    }
    textarea::-webkit-scrollbar-track {
      background: #f8fafc; /* slate-50 */
      border-radius: 10px;
    }
    textarea::-webkit-scrollbar-thumb {
      background: #cbd5e1; /* slate-300 */
      border-radius: 10px;
    }
    textarea::-webkit-scrollbar-thumb:hover {
      background: #94a3b8; /* slate-400 */
    }
  </style>
</head>
<body class="bg-gradient-to-br from-slate-900 to-slate-700 font-sans min-h-screen flex items-center justify-center p-4 sm:p-6">

  <form
    id="contactForm"
    class="w-full max-w-lg bg-white shadow-2xl rounded-xl p-8 sm:p-10 space-y-6 sm:space-y-8 transform transition-all duration-500 opacity-0 translate-y-5"
    method="post"
    action="show_info.php"
  >
    <h2 class="text-3xl sm:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 mb-8 text-center">
      Get in Touch
    </h2>

    <div>
      <label class="block text-sm font-semibold text-slate-600 mb-2" for="name">
        Full Name
      </label>
      <input
        name="name"
        id="name"
        type="text"
        placeholder="e.g., Jane Doe"
        required
        class="w-full px-4 py-3 border border-slate-300 rounded-lg bg-slate-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150 ease-in-out"
      />
    </div>

    <div>
      <label class="block text-sm font-semibold text-slate-600 mb-2" for="email">
        Email Address
      </label>
      <input
        name="email"
        id="email"
        type="email"
        placeholder="you@example.com"
        required
        class="w-full px-4 py-3 border border-slate-300 rounded-lg bg-slate-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150 ease-in-out"
      />
    </div>

    <div>
      <label class="block text-sm font-semibold text-slate-600 mb-2" for="message">
        Your Message
      </label>
      <textarea
        name="message"
        id="message"
        rows="5"
        placeholder="Let us know how we can help..."
        required
        class="w-full px-4 py-3 border border-slate-300 rounded-lg bg-slate-50 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-150 ease-in-out resize-none sm:resize-y"
      ></textarea>
      <p class="text-xs text-slate-400 mt-1">Min. 10 characters.</p> <!-- Example helper text -->
    </div>

    <button
      type="submit"
      class="w-full text-white font-semibold py-3 px-6 rounded-lg
             bg-gradient-to-r from-purple-600 to-pink-500
             hover:from-purple-700 hover:to-pink-600
             focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 focus:ring-offset-white
             transform hover:scale-[1.02] active:scale-[0.98] transition duration-150 ease-in-out"
    >
      Send Message
    </button>

    <!-- Optional: Footer link or info -->
    <!-- <p class="text-xs text-slate-500 text-center pt-4">
      We typically respond within 24 hours.
    </p> -->
  </form>

  <script>
    // Simple script for entry animation of the form
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('contactForm');
      if (form) {
        setTimeout(() => {
          form.classList.remove('opacity-0', 'translate-y-5');
          form.classList.add('opacity-100', 'translate-y-0');
        }, 100); // Small delay to ensure styles are applied
      }
    });
  </script>

</body>
</html>