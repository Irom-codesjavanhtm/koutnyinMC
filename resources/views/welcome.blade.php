<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kout Nyin MC — Purpur 1.21.11 Java server with Bedrock crossplay. Factions, medieval builds, economy, jobs, and timed boosters.">
    <meta name="theme-color" content="#060c15">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=JetBrains+Mono:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Kout Nyin MC — Kingdom Beyond the Stars</title>
</head>
<body>

    {{-- Scroll progress line --}}
    <div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

    <div class="bg" aria-hidden="true">
        <div class="stars"></div>
        <div class="nebula"></div>
        <div class="glow"></div>
        <div class="grid-bg"></div>
    </div>

    <header class="site-header">
        <div class="container nav">
            <a class="brand" href="#top" aria-label="Kout Nyin MC">
                <span class="brand__mark" aria-hidden="true"></span>
                <span class="brand__text">Kout Nyin MC</span>
            </a>
            <nav class="nav__links" aria-label="Primary navigation">
                <a href="#benefits">The Realm</a>
                <a href="#features">Arsenal</a>
                <a href="#dynmap">Live Map</a>
                <a href="#how">Journey</a>
                <a href="#reviews">Chronicles</a>
                <a href="#join">Enter</a>
            </nav>
            <div class="nav__cta">
                <button class="btn btn--ghost" type="button" data-copy="15.235.204.92:25720">
                    <span class="mono">15.235.204.92:25720</span>
                </button>
                <a class="btn btn--primary" href="#join">Join the Realm</a>
            </div>
        </div>
    </header>

    <main id="top">

        {{-- ── HERO ── --}}
        <section class="hero">

            {{-- Castle backdrop --}}
            <div class="hero__bg" aria-hidden="true">
                <img src="/images/castle.png" alt="" class="hero__bg-img">
                <div class="hero__bg-mist"></div>
                <div class="hero__bg-overlay"></div>
                <div class="hero__bg-vignette"></div>
            </div>

            <div class="container hero__grid">
                <div class="hero__copy">
                    <div class="hero__crest" aria-hidden="true">
                        <span class="crest__line"></span>
                        <span class="crest__sym">✦</span>
                        <span class="crest__line"></span>
                    </div>
                    <p class="eyebrow mono">Purpur 1.21.11 · Java + Bedrock Crossplay</p>
                    <h1>Forge your <span class="grad">kingdom</span> among the stars.</h1>
                    <p class="lead">Build empires, claim factions, and trade in living markets. An economy forged for builders—where every block laid, every trade made, shapes the realm.</p>
                    <div class="hero__actions">
                        <button class="btn btn--primary btn--big" type="button" data-copy="15.235.204.92:25720">
                            Enter the Realm &nbsp;<span class="mono">15.235.204.92:25720</span>
                        </button>
                        <a class="btn btn--ghost btn--big" href="#benefits">Explore the Kingdom</a>
                    </div>
                    <div class="pill-row">
                        <span class="pill"><span class="dot dot--cyan"></span>GeyserMC Crossplay</span>
                        <span class="pill"><span class="dot dot--violet"></span>Economy + Jobs</span>
                        <span class="pill"><span class="dot dot--gold"></span>Boosters Active</span>
                    </div>
                </div>

                <div class="hero__visual" aria-hidden="true">

                    {{-- Treasury plaque --}}
                    <div class="hero-card hero-card--treasury">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--tr"></span>
                        <span class="hc__corner hc__corner--bl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="hc__head">
                            <span class="hc__emblem">◈</span>
                            <div class="hc__crest-row">
                                <span class="hc__rule"></span>
                                <span class="hc__label">TREASURY</span>
                                <span class="hc__rule"></span>
                            </div>
                        </div>
                        <div class="hc__title">Sell. Flip. Trade.</div>
                        <div class="hc__sep"><span>✦</span></div>
                        <div class="hc__stats">
                            <div class="hc__stat"><span>/ah</span><span>Auctions</span></div>
                            <div class="hc__stat"><span>/trade</span><span>Secure</span></div>
                            <div class="hc__stat"><span>/shop</span><span>Markets</span></div>
                        </div>
                    </div>

                    {{-- Guild Work plaque --}}
                    <div class="hero-card hero-card--guild">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--tr"></span>
                        <span class="hc__corner hc__corner--bl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="hc__head">
                            <span class="hc__emblem">⟐</span>
                            <div class="hc__crest-row">
                                <span class="hc__rule"></span>
                                <span class="hc__label">GUILD WORK</span>
                                <span class="hc__rule"></span>
                            </div>
                        </div>
                        <div class="hc__title">Earn by doing anything.</div>
                        <div class="hc__sep"><span>✦</span></div>
                        <div class="hc__stats">
                            <div class="hc__stat"><span>+$/min</span><span>Active</span></div>
                            <div class="hc__stat"><span>+$/task</span><span>Craft</span></div>
                            <div class="hc__stat"><span>XP</span><span>Rank up</span></div>
                        </div>
                    </div>

                    {{-- War Season plaque --}}
                    <div class="hero-card hero-card--war">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--tr"></span>
                        <span class="hc__corner hc__corner--bl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="hc__head">
                            <span class="hc__emblem">✦</span>
                            <div class="hc__crest-row">
                                <span class="hc__rule"></span>
                                <span class="hc__label">WAR SEASON</span>
                                <span class="hc__rule"></span>
                            </div>
                        </div>
                        <div class="hc__title">Timed multipliers.</div>
                        <div class="hc__sep"><span>✦</span></div>
                        <div class="hc__stats">
                            <div class="hc__stat"><span>x2</span><span>Peak hrs</span></div>
                            <div class="hc__stat"><span>x3</span><span>Events</span></div>
                            <div class="hc__stat"><span>x?</span><span>Surprise</span></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="hero__scroll" aria-hidden="true">
                <span class="scroll-line"></span>
                <span class="scroll-label mono">Scroll to explore</span>
            </div>
        </section>

        {{-- ── MARQUEE ── --}}
        <div class="marquee-outer" aria-hidden="true">
            <div class="marquee-track">
                <span>✦ Medieval Builds</span><span>⚔ Faction Wars</span><span>⟡ Kingdom Treasury</span><span>⬡ Guild Jobs</span><span>◎ War Boosters</span><span>⌬ Secure Trades</span><span>◈ Java + Bedrock</span><span>✦ Purpur 1.21.11</span><span>⟐ Territory Claims</span><span>◎ DynMap Live</span>
                <span>✦ Medieval Builds</span><span>⚔ Faction Wars</span><span>⟡ Kingdom Treasury</span><span>⬡ Guild Jobs</span><span>◎ War Boosters</span><span>⌬ Secure Trades</span><span>◈ Java + Bedrock</span><span>✦ Purpur 1.21.11</span><span>⟐ Territory Claims</span><span>◎ DynMap Live</span>
            </div>
        </div>

        {{-- ── BENEFITS ── --}}
        <section id="benefits" class="section">
            <div class="container">
                <header class="section__head">
                    <p class="eyebrow mono">⚜ The Realm</p>
                    <h2>What makes the kingdom different</h2>
                    <div class="med-rule" aria-hidden="true"><span>✦</span></div>
                </header>

                <div class="strip-list">
                    <article class="strip glass">
                        <div class="strip__accent strip__accent--cyan"></div>
                        <div class="strip__num mono">01</div>
                        <div class="strip__body">
                            <div class="strip__label mono">ALL PLATFORMS</div>
                            <h3>No soldier left behind.</h3>
                            <p>Java-native performance, Bedrock access through <span class="mono">GeyserMC</span>. Phone, console, or PC—same kingdom, same economy, same progression.</p>
                        </div>
                        <div class="strip__tags">
                            <span class="tag mono">Java 1.21.11</span>
                            <span class="tag mono">Bedrock</span>
                            <span class="tag mono">Purpur</span>
                            <span class="tag mono">GeyserMC</span>
                        </div>
                        <div class="strip__orb strip__orb--cyan" aria-hidden="true"></div>
                    </article>

                    <article class="strip glass">
                        <div class="strip__accent strip__accent--violet"></div>
                        <div class="strip__num mono">02</div>
                        <div class="strip__body">
                            <div class="strip__label mono">ROYAL TREASURY</div>
                            <h3>The market is the battlefield.</h3>
                            <p>Auction rare loot, build trade routes, and run shop empires. A living economy where builders and merchants shape the wealth of the realm.</p>
                        </div>
                        <div class="strip__tags">
                            <span class="tag mono">Auctions</span>
                            <span class="tag mono">Trades</span>
                            <span class="tag mono">Shop</span>
                            <span class="tag mono">Economy</span>
                        </div>
                        <div class="strip__orb strip__orb--violet" aria-hidden="true"></div>
                    </article>

                    <article class="strip glass">
                        <div class="strip__accent strip__accent--gold"></div>
                        <div class="strip__num mono">03</div>
                        <div class="strip__body">
                            <div class="strip__label mono">GUILD PROGRESSION</div>
                            <h3>Log in with purpose, log out with power.</h3>
                            <p>Guild jobs keep the gold flowing. Timed war boosters create peak windows—plan your session, stack your earnings, claim your title.</p>
                        </div>
                        <div class="strip__tags">
                            <span class="tag mono">Jobs</span>
                            <span class="tag mono">Boosters</span>
                            <span class="tag mono">Multipliers</span>
                            <span class="tag mono">XP</span>
                        </div>
                        <div class="strip__orb strip__orb--gold" aria-hidden="true"></div>
                    </article>
                </div>
            </div>
        </section>

        {{-- ── CORE SYSTEMS / ARSENAL ── --}}
        <section id="features" class="section">
            <div class="container">
                <header class="section__head">
                    <p class="eyebrow mono">⚔ The Arsenal</p>
                    <h2>30 plugins. One living realm.</h2>
                    <div class="med-rule" aria-hidden="true"><span>✦</span></div>
                </header>

                {{-- Plugin count stat strip --}}
                <div class="arsenal-banner glass">
                    <div class="ab__stat">
                        <span class="ab__n mono">30</span>
                        <span class="ab__v">Active Plugins</span>
                    </div>
                    <div class="ab__sep" aria-hidden="true">·</div>
                    <div class="ab__stat">
                        <span class="ab__n mono">2</span>
                        <span class="ab__v">Paper Plugins</span>
                    </div>
                    <div class="ab__sep" aria-hidden="true">·</div>
                    <div class="ab__stat">
                        <span class="ab__n mono">28</span>
                        <span class="ab__v">Bukkit Plugins</span>
                    </div>
                    <div class="ab__sep" aria-hidden="true">·</div>
                    <div class="ab__stat">
                        <span class="ab__n mono">1.21.11</span>
                        <span class="ab__v">Purpur Java</span>
                    </div>
                    <div class="ab__spacer" aria-hidden="true"></div>
                    <span class="ab__note mono">Bukkit + Paper stack</span>
                </div>

                {{-- Primary feature grid --}}
                <div class="arsenal-grid">

                    {{-- Factions — featured wide (2 cols) --}}
                    <article class="ag-card ag-card--factions ag-card--featured glass">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--tr"></span>
                        <span class="hc__corner hc__corner--bl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="ag-card__orb" aria-hidden="true"></div>
                        <div class="ag-card__head">
                            <div class="ag-icon ag-icon--lg">✦</div>
                            <div>
                                <div class="bento__chip mono">FACTIONS &amp; TERRITORY</div>
                                <h3>Claim. Fortify. Conquer.</h3>
                            </div>
                        </div>
                        <p>Raise your walls, claim land, forge alliances or wage war. Territory is legacy. Every block you own is a statement.</p>
                        <div class="ag-card__plugins">
                            <span class="plugin-tag plugin-tag--lit">ClansLite</span>
                            <span class="plugin-tag plugin-tag--lit">ProtectionStones</span>
                            <span class="plugin-tag plugin-tag--lit">WorldGuard</span>
                            <span class="plugin-tag">WorldEdit</span>
                            <span class="plugin-tag">LuckPerms</span>
                        </div>
                    </article>

                    {{-- Economy --}}
                    <article class="ag-card ag-card--economy glass">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="ag-icon">⟡</div>
                        <div class="bento__chip mono">ECONOMY</div>
                        <h3>The Royal Treasury</h3>
                        <p>A fully-wired economy. Earn, spend, and trade across a living market.</p>
                        <div class="ag-card__plugins">
                            <span class="plugin-tag plugin-tag--lit">EconomyShopGUI</span>
                            <span class="plugin-tag plugin-tag--lit">eco</span>
                            <span class="plugin-tag plugin-tag--lit">Vault</span>
                        </div>
                    </article>

                    {{-- Auctions --}}
                    <article class="ag-card ag-card--auctions glass">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="ag-icon">⬡</div>
                        <div class="bento__chip mono">AUCTIONS</div>
                        <h3>The Grand Market</h3>
                        <p>Sell rare plunder. Set the price. Start bidding wars.</p>
                        <div class="ag-card__plugins">
                            <span class="plugin-tag plugin-tag--lit">best_auction</span>
                            <span class="plugin-tag">Vault</span>
                        </div>
                    </article>

                    {{-- Trades --}}
                    <article class="ag-card ag-card--trades glass">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="ag-icon">⌬</div>
                        <div class="bento__chip mono">TRADES &amp; ESSENTIALS</div>
                        <h3>Merchant Pacts</h3>
                        <p>Safe, instant trades. No scams, no chest juggling—just honor.</p>
                        <div class="ag-card__plugins">
                            <span class="plugin-tag plugin-tag--lit">Essentials</span>
                            <span class="plugin-tag">CMILib</span>
                            <span class="plugin-tag">ItemEdit</span>
                        </div>
                    </article>

                    {{-- Jobs --}}
                    <article class="ag-card ag-card--jobs glass">
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <div class="ag-icon">⟐</div>
                        <div class="bento__chip mono">GUILD WORK</div>
                        <h3>Jobs</h3>
                        <p>Mine, build, fight, explore — every hour earns coin for the realm.</p>
                        <div class="ag-card__plugins">
                            <span class="plugin-tag plugin-tag--lit">Jobs</span>
                            <span class="plugin-tag">PlaceholderAPI</span>
                            <span class="plugin-tag">Vault</span>
                        </div>
                    </article>

                </div>

                {{-- Full-width War Boosters banner --}}
                <article class="ag-banner glass">
                    <span class="hc__corner hc__corner--tl"></span>
                    <span class="hc__corner hc__corner--tr"></span>
                    <span class="hc__corner hc__corner--bl"></span>
                    <span class="hc__corner hc__corner--br"></span>
                    <div class="ag-banner__orb" aria-hidden="true"></div>
                    <div class="ag-banner__left">
                        <div class="ag-icon ag-icon--lg">◎</div>
                        <div>
                            <div class="bento__chip mono">WAR SEASON BOOSTERS</div>
                            <h3>Timed multipliers that ignite sessions.</h3>
                            <p class="muted">Booster windows reward those who plan. Catch the peak, stack your earnings, claim your title.</p>
                        </div>
                    </div>
                    <div class="ag-banner__right">
                        <div class="ag-banner__mults">
                            <div class="mult-cell">
                                <span class="mult-val mono">x2</span>
                                <span class="mult-label">Peak Hours</span>
                            </div>
                            <div class="mult-cell">
                                <span class="mult-val mono">x3</span>
                                <span class="mult-label">War Events</span>
                            </div>
                            <div class="mult-cell">
                                <span class="mult-val mono">x?</span>
                                <span class="mult-label">Surprises</span>
                            </div>
                        </div>
                        <div class="ag-card__plugins" style="justify-content:flex-end">
                            <span class="plugin-tag">AdvancedScoreboard</span>
                            <span class="plugin-tag">PlaceholderAPI</span>
                        </div>
                    </div>
                </article>

                {{-- Secondary plugin strip --}}
                <div class="arsenal-extras">
                    <span class="ae__label mono">Also in the realm ↓</span>
                    <div class="ae__tags">
                        <span class="plugin-tag">Wild</span>
                        <span class="plugin-tag">Chunky</span>
                        <span class="plugin-tag">ChunkLoader</span>
                        <span class="plugin-tag">MineSpawners</span>
                        <span class="plugin-tag">AxGraves</span>
                        <span class="plugin-tag">SkinsRestorer</span>
                        <span class="plugin-tag">DiscordSRV</span>
                        <span class="plugin-tag">voicechat</span>
                        <span class="plugin-tag">dynmap</span>
                        <span class="plugin-tag">floodgate</span>
                        <span class="plugin-tag">Geyser-Spigot</span>
                        <span class="plugin-tag">CMILib</span>
                        <span class="plugin-tag">PluginConstructorAPI</span>
                        <span class="plugin-tag">CustomJoinMessages</span>
                    </div>
                </div>

            </div>
        </section>

        {{-- ── LIVE MAP ── --}}
        <section id="dynmap" class="section section--map">
            <div class="container map-container">

                {{-- Compact two-col header --}}
                <div class="map-header">
                    <div class="map-header__title">
                        <p class="eyebrow mono">◈ Scout the Realm</p>
                        <h2>The Known World.</h2>
                        <p class="muted">Live terrain, rendered by DynMap. Watch factions expand in real time and scout your next conquest before you even log in.</p>
                    </div>
                    <div class="map-header__meta">
                        <div class="mmc">
                            <span class="mmc__k mono">Plugin</span>
                            <span class="mmc__v">DynMap</span>
                        </div>
                        <div class="mmc">
                            <span class="mmc__k mono">World</span>
                            <span class="mmc__v">Overworld</span>
                        </div>
                        <div class="mmc">
                            <span class="mmc__k mono">Map Port</span>
                            <span class="mmc__v mono">:25691</span>
                        </div>
                    </div>
                </div>

                {{-- Map station --}}
                <div class="map-station">

                    {{-- Corner crosshair markers --}}
                    <span class="ms-cross ms-cross--tl" aria-hidden="true"></span>
                    <span class="ms-cross ms-cross--tr" aria-hidden="true"></span>
                    <span class="ms-cross ms-cross--bl" aria-hidden="true"></span>
                    <span class="ms-cross ms-cross--br" aria-hidden="true"></span>

                    {{-- Top control bar --}}
                    <div class="ms-bar">
                        <div class="ms-bar__left">
                            <span class="live-badge mono"><span class="live-dot" aria-hidden="true"></span>LIVE</span>
                            <span class="ms-bar__title">Kout Nyin MC · The Known World</span>
                        </div>
                        <div class="ms-bar__right">
                            <span class="ms-coord mono">flat · x 595 · z 1942</span>
                            <a class="ms-open-btn mono"
                               href="http://15.235.204.92:25691/?worldname=world&mapname=flat&zoom=3&x=595&y=64&z=1942"
                               target="_blank" rel="noopener noreferrer">
                                Open full map ↗
                            </a>
                        </div>
                    </div>

                    {{-- Map iframe --}}
                    <div class="ms-frame">
                        <iframe
                            src="http://15.235.204.92:25691/?worldname=world&mapname=flat&zoom=3&x=595&y=64&z=1942"
                            class="map-iframe"
                            title="Kout Nyin MC Live World Map"
                            loading="lazy"
                            allowfullscreen>
                        </iframe>
                        <div class="map-frame-cover" aria-hidden="true"></div>
                    </div>

                    {{-- Bottom status bar --}}
                    <div class="ms-footer">
                        <span class="mono">Scroll to zoom · Drag to pan · Click to get coordinates</span>
                        <a class="mono"
                           href="http://15.235.204.92:25691/?worldname=world&mapname=flat&zoom=3&x=595&y=64&z=1942"
                           target="_blank" rel="noopener noreferrer">
                            15.235.204.92:25691 ↗
                        </a>
                    </div>

                </div>

            </div>
        </section>

        {{-- ── HOW IT PLAYS ── --}}
        <section id="how" class="section">
            <div class="container">

                <header class="section__head">
                    <p class="eyebrow mono">⚜ The Journey</p>
                    <h2>Four chapters. One kingdom.</h2>
                    <div class="med-rule" aria-hidden="true"><span>✦</span></div>
                    <p class="muted" style="max-width:52ch; margin:0 auto;">From the spawn gate to economic sovereign — four steps that define your reign.</p>
                </header>

                {{-- Server Spec Bar --}}
                <div class="spec-bar glass">
                    <div class="spec-item">
                        <span class="spec-k mono">Server Type</span>
                        <span class="spec-v">Java · Purpur</span>
                    </div>
                    <div class="spec-div" aria-hidden="true"></div>
                    <div class="spec-item">
                        <span class="spec-k mono">Version</span>
                        <span class="spec-v mono">1.21.11</span>
                    </div>
                    <div class="spec-div" aria-hidden="true"></div>
                    <div class="spec-item">
                        <span class="spec-k mono">Crossplay</span>
                        <span class="spec-v">Bedrock · GeyserMC</span>
                    </div>
                    <div class="spec-div" aria-hidden="true"></div>
                    <div class="spec-item">
                        <span class="spec-k mono">Gameplay</span>
                        <span class="spec-v">Survival · Economy · PvP</span>
                    </div>
                    <div class="spec-div" aria-hidden="true"></div>
                    <div class="spec-item">
                        <span class="spec-k mono">IP Address</span>
                        <span class="spec-v mono">15.235.204.92:25720</span>
                    </div>
                </div>

                {{-- Chapter Cards 2×2 --}}
                <div class="chapters-grid">

                    <article class="chapter glass">
                        <span class="chapter__num-bg mono" aria-hidden="true">I</span>
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <header class="chapter__head">
                            <div class="chapter__icon">⚔</div>
                            <span class="chapter__label mono">Chapter I · The Gates</span>
                        </header>
                        <h3>Ride in from any platform</h3>
                        <p>Java on 1.21.11, Bedrock through GeyserMC. Same realm, same economy, same progression — no walls between platforms.</p>
                        <div class="chapter__tags">
                            <span class="plugin-tag plugin-tag--lit">Geyser-Spigot</span>
                            <span class="plugin-tag plugin-tag--lit">floodgate</span>
                            <span class="plugin-tag">Purpur 1.21.11</span>
                        </div>
                    </article>

                    <article class="chapter glass">
                        <span class="chapter__num-bg mono" aria-hidden="true">II</span>
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <header class="chapter__head">
                            <div class="chapter__icon">⚒</div>
                            <span class="chapter__label mono">Chapter II · The Guild</span>
                        </header>
                        <h3>Choose your guild path</h3>
                        <p>Jobs pay you for your craft. Build, mine, fight, or explore — your trade earns standing in the realm.</p>
                        <div class="chapter__tags">
                            <span class="plugin-tag plugin-tag--lit">Jobs</span>
                            <span class="plugin-tag">Vault</span>
                            <span class="plugin-tag">Essentials</span>
                            <span class="plugin-tag">Wild</span>
                        </div>
                    </article>

                    <article class="chapter glass">
                        <span class="chapter__num-bg mono" aria-hidden="true">III</span>
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <header class="chapter__head">
                            <div class="chapter__icon">◈</div>
                            <span class="chapter__label mono">Chapter III · The Market</span>
                        </header>
                        <h3>Turn plunder into power</h3>
                        <p>Auction the rare. Trade with allies. Stock the shops. Or hoard it for your faction's war chest.</p>
                        <div class="chapter__tags">
                            <span class="plugin-tag plugin-tag--lit">best_auction</span>
                            <span class="plugin-tag plugin-tag--lit">EconomyShopGUI</span>
                            <span class="plugin-tag">Vault</span>
                            <span class="plugin-tag">eco</span>
                        </div>
                    </article>

                    <article class="chapter glass">
                        <span class="chapter__num-bg mono" aria-hidden="true">IV</span>
                        <span class="hc__corner hc__corner--tl"></span>
                        <span class="hc__corner hc__corner--br"></span>
                        <header class="chapter__head">
                            <div class="chapter__icon">⬡</div>
                            <span class="chapter__label mono">Chapter IV · The War</span>
                        </header>
                        <h3>Strike during war season</h3>
                        <p>Booster windows reward those who plan. Hit the multipliers, compound your wealth, claim your title.</p>
                        <div class="chapter__tags">
                            <span class="plugin-tag plugin-tag--lit">ClansLite</span>
                            <span class="plugin-tag plugin-tag--lit">ProtectionStones</span>
                            <span class="plugin-tag">WorldGuard</span>
                            <span class="plugin-tag">AdvancedScoreboard</span>
                        </div>
                    </article>

                </div>

            </div>
        </section>

        {{-- ── REVIEWS / FANDOM ── --}}
        <section id="reviews" class="section section--reviews">
            <div class="container">

                <header class="section__head">
                    <p class="eyebrow mono">✦ The Chronicles</p>
                    <h2>Words from the realm.</h2>
                    <div class="med-rule" aria-hidden="true"><span>✦</span></div>
                    <p class="muted" style="max-width:48ch; margin:0 auto;">Real players, real stories. Leave your mark in the annals of Kout Nyin MC.</p>
                </header>

                {{-- Two-col: form left, reviews right --}}
                <div class="rv-layout">

                    {{-- Submit form --}}
                    <div class="rv-form-wrap">
                        <form class="rv-form glass" id="reviewForm" novalidate>
                            @csrf
                            <h3 class="rv-form__title">Leave your chronicle</h3>

                            <div class="rv-field">
                                <label class="rv-label mono" for="rv-name">Your name</label>
                                <input class="rv-input" id="rv-name" name="name" type="text"
                                       placeholder="e.g. KnightOfTheNorth" maxlength="60" required>
                            </div>

                            <div class="rv-field">
                                <label class="rv-label mono">Platform</label>
                                <div class="rv-platform">
                                    <label class="rv-platform__opt">
                                        <input type="radio" name="platform" value="Java" checked>
                                        <span><span class="dot dot--cyan"></span> Java</span>
                                    </label>
                                    <label class="rv-platform__opt">
                                        <input type="radio" name="platform" value="Bedrock">
                                        <span><span class="dot dot--violet"></span> Bedrock</span>
                                    </label>
                                </div>
                            </div>

                            <div class="rv-field">
                                <label class="rv-label mono">Rating</label>
                                <div class="rv-stars" id="rvStars" role="group" aria-label="Rating">
                                    <span class="rv-star active" data-val="1">★</span>
                                    <span class="rv-star active" data-val="2">★</span>
                                    <span class="rv-star active" data-val="3">★</span>
                                    <span class="rv-star active" data-val="4">★</span>
                                    <span class="rv-star active" data-val="5">★</span>
                                </div>
                                <input type="hidden" name="rating" id="rvRating" value="5">
                            </div>

                            <div class="rv-field">
                                <label class="rv-label mono" for="rv-body">Your review</label>
                                <textarea class="rv-input rv-textarea" id="rv-body" name="body"
                                          placeholder="Share your experience on the server..." maxlength="500" required></textarea>
                                <span class="rv-char mono"><span id="rvCharCount">0</span>/500</span>
                            </div>

                            <button class="btn btn--primary rv-submit" type="submit">
                                <span class="rv-submit__text">Submit Chronicle</span>
                                <span class="rv-submit__loading" hidden>Sending…</span>
                            </button>

                            <div class="rv-form-msg" id="rvFormMsg" hidden></div>
                        </form>
                    </div>

                    {{-- Live reviews grid --}}
                    <div class="rv-right">
                        <div class="rv-meta">
                            <span class="rv-live-badge mono"><span class="live-dot"></span> Live</span>
                            <span class="rv-count mono muted" id="rvCount">Loading…</span>
                        </div>
                        <div class="rv-grid" id="rvGrid">
                            {{-- Cards injected by JS --}}
                            <div class="rv-empty" id="rvEmpty">
                                <span class="mono muted">No chronicles yet. Be the first.</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        {{-- ── JOIN / CTA ── --}}
        <section id="join" class="section section--cta">
            <div class="container">

                <div class="join-head">
                    <div class="hero__crest hero__crest--lg" aria-hidden="true">
                        <span class="crest__line"></span>
                        <span class="crest__sym">⚜</span>
                        <span class="crest__line"></span>
                    </div>
                    <p class="eyebrow mono">Enter the Realm</p>
                    <h2 class="join-head__h">The gates are open.<br>The kingdom awaits.</h2>
                    <p class="muted join-head__sub">Copy the IP, rally your allies, and build something the realm will remember.</p>
                </div>

                <div class="join-cta-ip glass">
                    <span class="jg__ip-label mono">Server IP</span>
                    <span class="jg__ip-addr mono">15.235.204.92:25720</span>
                    <button class="btn btn--primary" type="button" data-copy="15.235.204.92:25720">Copy IP</button>
                </div>

                <div class="join-pills">
                    <span class="pill"><span class="dot dot--cyan"></span>Java 1.21.11</span>
                    <span class="pill"><span class="dot dot--violet"></span>Bedrock Crossplay</span>
                    <span class="pill"><span class="dot dot--gold"></span>Purpur Server</span>
                </div>

                <div class="toast" role="status" aria-live="polite" aria-atomic="true" hidden></div>

            </div>
        </section>

    </main>

    <footer class="site-footer">

        {{-- Ornament divider --}}
        <div class="ft-rule" aria-hidden="true">
            <span class="ft-rule__line"></span>
            <span class="ft-rule__sym">⚜</span>
            <span class="ft-rule__line"></span>
        </div>

        <div class="container">

            {{-- Three-column body --}}
            <div class="ft-body">

                {{-- Brand --}}
                <div class="ft-brand">
                    <a class="brand" href="#top" aria-label="Back to top">
                        <span class="brand__mark" aria-hidden="true"></span>
                        <span class="brand__text">Kout Nyin MC</span>
                    </a>
                    <p class="ft-brand__tagline">A medieval kingdom among the stars.</p>
                    <p class="ft-brand__sub muted">Survival · Economy · PvP · Creativity.<br>Java and Bedrock. All platforms welcome.</p>
                    <div class="ft-brand__dots" aria-hidden="true">
                        <span class="dot dot--cyan"></span>
                        <span class="dot dot--violet"></span>
                        <span class="dot dot--gold"></span>
                    </div>
                </div>

                {{-- Navigation --}}
                <nav class="ft-nav" aria-label="Footer navigation">
                    <span class="ft-section-label mono" aria-hidden="true">Navigation</span>
                    <a href="#benefits">The Realm</a>
                    <a href="#features">Arsenal</a>
                    <a href="#dynmap">Live Map</a>
                    <a href="#how">Journey</a>
                    <a href="#join">Enter the Realm</a>
                </nav>

                {{-- Connect --}}
                <div class="ft-connect">
                    <span class="ft-section-label mono" aria-hidden="true">Connect</span>
                    <div class="ft-ip">
                        <span class="ft-ip__label mono">Server IP</span>
                        <span class="ft-ip__addr mono">15.235.204.92:25720</span>
                    </div>
                    <div class="ft-ip">
                        <span class="ft-ip__label mono">Map</span>
                        <a class="ft-ip__addr mono ft-ip__link"
                           href="http://15.235.204.92:25691/?worldname=world&mapname=flat&zoom=3&x=595&y=64&z=1942"
                           target="_blank" rel="noopener noreferrer">
                            15.235.204.92:25691 ↗
                        </a>
                    </div>
                    <div class="ft-tags">
                        <span class="plugin-tag">Java 1.21.11</span>
                        <span class="plugin-tag">Bedrock</span>
                        <span class="plugin-tag">Purpur</span>
                        <span class="plugin-tag">GeyserMC</span>
                    </div>
                </div>

            </div>

            {{-- Bottom bar --}}
            <div class="ft-bottom">
                <span class="mono">© 2025 Kout Nyin MC. All rights reserved.</span>
                <a class="ft-top mono" href="#top" aria-label="Back to top">Back to top ↑</a>
            </div>

        </div>
    </footer>

    {{-- Section dot navigator (slide bar) --}}
    <nav class="sect-nav" aria-label="Page sections">
        <a class="sect-dot" href="#top"      data-label="Top"         aria-label="Scroll to top"></a>
        <a class="sect-dot" href="#benefits" data-label="The Realm"   aria-label="The Realm"></a>
        <a class="sect-dot" href="#features" data-label="Arsenal"     aria-label="Arsenal"></a>
        <a class="sect-dot" href="#dynmap"   data-label="Live Map"    aria-label="Live Map"></a>
        <a class="sect-dot" href="#how"      data-label="Journey"     aria-label="Journey"></a>
        <a class="sect-dot" href="#reviews"  data-label="Chronicles"  aria-label="Chronicles"></a>
        <a class="sect-dot" href="#join"     data-label="Enter"       aria-label="Enter"></a>
    </nav>

    <script>
    (function () {

        /* ── Copy to clipboard ── */
        const toast = document.querySelector('.toast');
        let toastTimer = null;
        function showToast(msg) {
            if (!toast) return;
            toast.textContent = msg;
            toast.hidden = false;
            toast.classList.remove('toast--show');
            void toast.offsetWidth;
            toast.classList.add('toast--show');
            clearTimeout(toastTimer);
            toastTimer = setTimeout(() => { toast.hidden = true; }, 2400);
        }
        async function copyText(text) {
            try {
                await navigator.clipboard.writeText(text);
            } catch {
                const ta = document.createElement('textarea');
                ta.value = text; ta.style.cssText = 'position:absolute;left:-9999px';
                document.body.appendChild(ta); ta.select();
                document.execCommand('copy'); document.body.removeChild(ta);
            }
            showToast('Copied: ' + text);
        }
        document.addEventListener('click', e => {
            const btn = e.target.closest('[data-copy]');
            if (btn) copyText(btn.getAttribute('data-copy'));
        });

        /* ── Scroll progress bar ── */
        const progressBar = document.getElementById('scrollProgress');
        function updateProgress() {
            if (!progressBar) return;
            const total = document.documentElement.scrollHeight - window.innerHeight;
            progressBar.style.width = (total > 0 ? (window.scrollY / total) * 100 : 0) + '%';
        }

        /* ── Section dot navigator ── */
        const sectDots = Array.from(document.querySelectorAll('.sect-dot'));
        const sectionIds = ['top', 'benefits', 'features', 'dynmap', 'how', 'reviews', 'join'];
        function updateActiveDot() {
            let active = 0;
            sectionIds.forEach((id, i) => {
                const el = id === 'top' ? document.body : document.getElementById(id);
                if (el && el.getBoundingClientRect().top <= window.innerHeight * 0.5) active = i;
            });
            sectDots.forEach((dot, i) => dot.classList.toggle('active', i === active));
        }
        window.addEventListener('scroll', () => { updateProgress(); updateActiveDot(); }, { passive: true });
        updateProgress(); updateActiveDot();

        /* ════════════════════════════════════════
           ── Reviews / Fandom ──
        ════════════════════════════════════════ */

        const rvGrid    = document.getElementById('rvGrid');
        const rvEmpty   = document.getElementById('rvEmpty');
        const rvCount   = document.getElementById('rvCount');
        const rvForm    = document.getElementById('reviewForm');
        const rvStars   = document.querySelectorAll('.rv-star');
        const rvRating  = document.getElementById('rvRating');
        const rvBody    = document.getElementById('rv-body');
        const rvCharCnt = document.getElementById('rvCharCount');
        const rvMsg     = document.getElementById('rvFormMsg');

        /* — Star picker — */
        if (rvStars.length) {
            rvStars.forEach(star => {
                star.addEventListener('click', () => {
                    const val = parseInt(star.dataset.val);
                    rvRating.value = val;
                    rvStars.forEach(s => s.classList.toggle('active', parseInt(s.dataset.val) <= val));
                });
                star.addEventListener('mouseenter', () => {
                    const val = parseInt(star.dataset.val);
                    rvStars.forEach(s => s.classList.toggle('hover', parseInt(s.dataset.val) <= val));
                });
            });
            document.getElementById('rvStars')?.addEventListener('mouseleave', () => {
                rvStars.forEach(s => s.classList.remove('hover'));
            });
        }

        /* — Char counter — */
        rvBody?.addEventListener('input', () => {
            if (rvCharCnt) rvCharCnt.textContent = rvBody.value.length;
        });

        /* — Render a review card — */
        function renderCard(rv) {
            const stars = '★'.repeat(rv.rating) + '☆'.repeat(5 - rv.rating);
            const date  = new Date(rv.created_at).toLocaleDateString('en-GB', { day:'numeric', month:'short', year:'numeric' });
            const platClass = rv.platform === 'Bedrock' ? 'rv-card__plat--bedrock' : 'rv-card__plat--java';
            const card = document.createElement('article');
            card.className = 'rv-card glass';
            card.dataset.id = rv.id;
            card.innerHTML = `
                <div class="rv-card__top">
                    <div class="rv-card__avatar">${rv.name.slice(0,2).toUpperCase()}</div>
                    <div class="rv-card__meta">
                        <span class="rv-card__name">${escHtml(rv.name)}</span>
                        <span class="rv-card__plat ${platClass} mono">${rv.platform}</span>
                    </div>
                    <span class="rv-card__stars mono">${stars}</span>
                </div>
                <p class="rv-card__body">${escHtml(rv.body)}</p>
                <span class="rv-card__date mono">${date}</span>`;
            return card;
        }

        function escHtml(str) {
            return str.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
        }

        /* — Load reviews from API — */
        let knownIds = new Set();
        async function loadReviews() {
            try {
                const res  = await fetch('/reviews');
                const data = await res.json();
                if (!rvGrid) return;

                const newOnes = data.filter(r => !knownIds.has(r.id));
                if (newOnes.length) {
                    newOnes.forEach(rv => {
                        knownIds.add(rv.id);
                        const card = renderCard(rv);
                        if (rvEmpty && !rvEmpty.hidden) rvEmpty.hidden = true;
                        rvGrid.insertBefore(card, rvGrid.firstChild);
                    });
                }

                if (rvCount) rvCount.textContent = data.length + ' chronicle' + (data.length !== 1 ? 's' : '');
            } catch (e) { /* silent — server may be offline */ }
        }

        /* — Submit review — */
        rvForm?.addEventListener('submit', async e => {
            e.preventDefault();
            const submitBtn  = rvForm.querySelector('.rv-submit');
            const textEl     = rvForm.querySelector('.rv-submit__text');
            const loadEl     = rvForm.querySelector('.rv-submit__loading');

            submitBtn.disabled = true;
            textEl.hidden = true; loadEl.hidden = false;
            rvMsg.hidden = true;

            const fd = new FormData(rvForm);
            try {
                const res = await fetch('/reviews', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': fd.get('_token') },
                    body: fd,
                });
                const json = await res.json();
                if (res.ok) {
                    knownIds.add(json.id);
                    const card = renderCard(json);
                    if (rvEmpty) rvEmpty.hidden = true;
                    rvGrid.insertBefore(card, rvGrid.firstChild);
                    card.classList.add('rv-card--new');
                    if (rvCount) {
                        const cur = parseInt(rvCount.textContent) || 0;
                        rvCount.textContent = (cur + 1) + ' chronicle' + (cur + 1 !== 1 ? 's' : '');
                    }
                    showFormMsg('Chronicle submitted — thank you, adventurer!', 'success');
                    rvForm.reset();
                    rvRating.value = 5;
                    rvStars.forEach(s => s.classList.add('active'));
                    if (rvCharCnt) rvCharCnt.textContent = '0';
                } else {
                    const errs = json.errors ? Object.values(json.errors).flat().join(' · ') : 'Submission failed.';
                    showFormMsg(errs, 'error');
                }
            } catch {
                showFormMsg('Could not connect to the server. Try again.', 'error');
            } finally {
                submitBtn.disabled = false;
                textEl.hidden = false; loadEl.hidden = true;
            }
        });

        function showFormMsg(msg, type) {
            if (!rvMsg) return;
            rvMsg.textContent = msg;
            rvMsg.className   = 'rv-form-msg rv-form-msg--' + type;
            rvMsg.hidden      = false;
            setTimeout(() => { rvMsg.hidden = true; }, 5000);
        }

        /* — Initial load + poll every 60s — */
        loadReviews();
        setInterval(loadReviews, 60000);

    })();
    </script>
</body>
</html>
