# Omens MU plugins

Single-file must-use plugins installed account-wide on Pressable (Account → MU Plugins). Pressable installs each one from its raw GitHub URL, so files here must stay public and self-contained.

| File | What it does |
|------|--------------|
| `omens-disable-jetpack-brute-force.php` | Keeps Jetpack's Brute Force Protection module (`protect`) off, so login pages never show the "Prove your humanity" math question. Pressable's platform bot protection and Jetpack Account Protection are unaffected. |

## Updating a plugin

Pressable is pointed at a **commit-pinned** raw URL (`https://raw.githubusercontent.com/omens-agency/omens-wp-mu-plugins/<sha>/<file>.php`), never at `main`. A redeploy can only install the exact bytes that were reviewed at that commit.

1. Open a PR with the change and merge it to `main` (`main` is protected; no direct pushes).
2. In Pressable, edit the MU plugin's path to the new merge commit's SHA, then redeploy to existing sites.

Pushing to `main` alone changes nothing on any site.
