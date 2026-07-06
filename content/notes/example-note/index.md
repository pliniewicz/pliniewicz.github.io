+++
title = "Example note — syntax cheatsheet"
description = "A draft reference for writing notes: math, code, figures, tags. Never published (draft = true)."
date = 2026-07-06
draft = true

[taxonomies]
tags = ["meta"]

[extra]
math = true
+++

This file is a **draft** (`draft = true` in the front matter), so `zola build` skips it.
Keep it as a cheatsheet; copy it to start a real note and set `draft = false` (or delete the line).

## Math

Set `math = true` under `[extra]` to load KaTeX on this page only. Inline math like
$F_\nu \propto \nu^{-\alpha}$ works with single dollars, display equations with double:

$$
\frac{dN}{dE} = N_0 \left(\frac{E}{E_0}\right)^{-\Gamma} \exp\!\left(-\tau_{\gamma\gamma}(E, z)\right)
$$

## Code

Fenced blocks get build-time syntax highlighting (no client JS):

```python
import jax.numpy as jnp

def synchrotron_kernel(x):
    return x * jnp.exp(-x)  # crude, replace with F(x) integral
```

## Figures

This note is a *page bundle* — a directory with `index.md` — so figures live next to
the text and are referenced by bare filename:

```markdown
![Spectral energy distribution of the knot](sed.png)
```

For a caption, drop to HTML:

```html
<figure>
  <img src="sed.png" alt="SED of the western hotspot">
  <figcaption>Fig. 1 — broad-band SED, synchrotron + IC/CMB fit.</figcaption>
</figure>
```

## Front matter recap

- `title`, `description` (shown in listings), `date` — required in practice
- `tags` — pick from a small stable set: `jets`, `cosmology`, `remote-sensing`, `meteorology`, `computing`
- `[extra] math = true` — only when the note contains math
