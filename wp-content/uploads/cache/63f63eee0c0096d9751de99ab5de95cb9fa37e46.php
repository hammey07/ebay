<?php
/*  © 2013 eBay Inc., All Rights Reserved */
/* Licensed under CDDL 1.0 -  http://opensource.org/licenses/cddl1.php */
  //show all errors - useful whilst developing
  error_reporting(E_ALL);

  // these keys can be obtained by registering at http://developer.ebay.com

  $production         = true;   // toggle to true if going against production
  $compatabilityLevel = 967;    // eBay API version

  if ($production) {
      $devID = '63cff0bb-3740-47e3-9dc8-d69c0c9c61e9';   // these prod keys are different from sandbox keys
      $appID = 'HammadSa-Accounta-PRD-72a090144-5a710bd7';
      $certID = 'PRD-2a0901442915-d52d-480a-a169-e2f0';
      //set the Server to use (Sandbox or Production)
      $serverUrl = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
      //the token representing the eBay user to assign the call with
      $userToken = ("v^1.1#i^1#I^3#f^0#r^0#p^3#t^H4sIAAAAAAAAAOVYa2wUVRTu9qUIiCYIBIpZF4kKmd07M7szOxO2yZa2ttDHsrsFxDT17syddtrZmWHmbtsF1FpKjQYJMT4gBtP4g4ghqBAEE/xBDCGmRgMSHz8QEAER/GM0RqyJd3bb0laFtovJJu6fzT33vL5zzzn3zAU9pTOW9df0/zbbdVfhQA/oKXS56JlgRmnJ8nuLCheWFIAxDK6Bnod7inuLflhhw6RmilFkm4ZuI3d3UtNtMUMMeVKWLhrQVm1Rh0lki1gSY+H6OpHxAtG0DGxIhuZx11aGPIxMSwHBzygJng3KPCJUfURn3CD7CAKeDvAKzXBSQlLIvm2nUK1uY6hjsg8YQNEMRbNxhhEBK/o5Lx8MbvC41yLLVg2dsHiBpzzjrpiRtcb4emtXoW0jCxMlnvLacHWsMVxbWdUQX+Ebo6t8OA4xDHHKHr9aacjIvRZqKXRrM3aGW4ylJAnZtsdXnrUwXqkYHnFmGu5nQi0zkPUnlICsCDSf4KQ7Espqw0pCfGs/HIoqU0qGVUQ6VnH6dhEl0Ui0IwkPrxqIitpKt/O3JgU1VVGRFfJUVYSfaIpVRT3uWCRiGZ2qjGQHKc3yQjDgZ1nibZtB3MGGhVQLaVCXh21lFQ5HeoKxlYYuq07cbHeDgSsQcRyNDw8tBsaEhzA16o1WWMGOU6N8/jgAI2HkCZ9v5CBTuE13jhYlSSzcmeXtD2EkK27mwZ3KCz8tC4KkAAFKHBdQ/OPzwqn16eVGuXM84UjE5/iCEjBNJaHVgbCpQQlREglvKoksVRbZgMKwQQVRMicolF9QFCoRkDmKVhACCCUSkhD8n6UIxpaaSGE0miYTNzI4Qx7NaFX1eoTbDNkzkSXTeYaTotsOedowNkWfr6ury9vFeg2r1ccAQPvW19fFpDaUhJ5RXvX2zJSaSQ+JNGzCL+K0SbzpJtlHjOutnnIn5rWVIyk7zqXyidR/wRaTDBNFDE2V0vmFjbXkCLRwOoY0jRByAmk7IPMFnlPrWYiODpsogabqdUrXKxlJnwFJq3JILRmv3ZNh8tkkSN5s4RPNXgtB2dC19HSEpyCj6p2kaAwrPR2Do8JTkIGSZKR0PB1zw6JTkFBSmqJqmtMXpmNwjPhU3NShlsaqZE/LpKo7GWdPQcSE6QxAWbVNp14mJUlo5E6RkJf0+cycMepsTlVqIZncDRJuSVlqvhRrtlBrYDIJ5ZYY1BBKUtlVDFLhTE5RVmpjQuls/yfsTq1PGn/YNGvz7IKZABVDKhKtpHgGAgHQfj8VgDwNEjKf07lXos58w82xkqKARIJieT+g/DxiKUGWgs7sJAFJkDgaCTlhViHOL8Q0B/igwAMmkNs4gSQL5Rk0oEdWNfJYBnF2eWtNU7Uc1wHfZnR1B5Lr46mmqnYh6hPWBI0OwQ7lAD47wztNU1ShImKjA+nxdP7MHdlgRKuqo1WxmpZ44+qqhpyO2rkU8nEojoRjsXWN0dzGYqcXJ5MpDBMayrfm5GeEoAByglffquYZKPK1xnKA8wssALm11pWaSqaS/7byip/bM63r1LAxkieLbgJhzFfq394ofOPfCcsLMj+613UY9LreL3S5gA8spZeAh0qLmoqLZi20VUymN6h4bbVVhzhlIW8HSptQtQpLXWYT/HHpmJfJgWawYPRtckYRPXPMQyUou7lTQs+ZP5sBNEOzDANYP7cBLLm5W0zPK56787v9T2mHPn3r+ks3Zg1u4oqvL25uBrNHmVyukoLiXldBH3/pWFvZ6w9eq7z68vFt9OkjLe+6wdY/d53v4s9E3rxwdOjoWXHzpo2l25sF18W9PZvn8Ye5E0MHnz3n+0AuPP+TbPatuog2fX9h5+nzZa0n+lCF+cwD9Yv3zL/QGLr/EH/yi+KBr4Z+3XL2ZKzvwNs/f3R40dd9B5pfffoS/Kxo3b53tu76PWgya+GOY8dPvfJonfK4dmRJpO6X++aYot37xpHdtVzB0SF20brLH5Ze2h48U/b57mDzjZp7rm5ZHB8aqODe2/1iz5Vjdz/5yCd7D31c+sfzpxLfrj63b3DQVbj/YGhZ5ZnNfGhB/+AL9pXLQ9vm3hD6j3vad6yOXpMfY7q/CQinX4h8GX0te3x/AZAl49gzFgAA");


} else {
      // sandbox (test) environment
      $devID = 'DDD_SAND';         // insert your devID for sandbox
      $appID = 'AAA_SAND';   // different from prod keys
      $certID = 'CCC_SAND';  // need three 'keys' and one token
      //set the Server to use (Sandbox or Production)
      $serverUrl = 'https://api.sandbox.ebay.com/ws/api.dll';
      // the token representing the eBay user to assign the call with
      // this token is a long string - don't insert new lines - different from prod token
      $userToken = 'SANDBOX_TOKEN';
  }


?>
