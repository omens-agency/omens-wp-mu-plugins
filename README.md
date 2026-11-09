# Omens MU plugins

Single-file must-use plugins installed account-wide on Pressable (Account → MU Plugins). Pressable installs each one from its raw GitHub URL, so files here must stay public and self-contained.

| File | What it does |
|------|--------------|
| `omens-disable-jetpack-brute-force.php` | Keeps Jetpack's Brute Force Protection module (`protect`) off, so login pages never show the "Prove your humanity" math question. Pressable's platform bot protection and Jetpack Account Protection are unaffected. |

To change a plugin, edit the file here, push to `main`, then update the plugin in Pressable so it redeploys.
