module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
        extend: {
            backgroundImage: {
                "banner": "url('../img/banner-principal.png')",
                "sobre": "url('../img/exfera.png')",
                "fundo": "url('../img/fundo-sobre.png')",
                        },
            fontFamily: {
                bodoni: ['var(--font-bodoni)'],
            },
            colors: {
                blue: {
                    "800": "#264EB1",
                },
                
                violet: {
                    "800": "#1A0DD6",
                },
                purple: {
                    "500": "#AA01F7",
                    "600": "#8b0dc5",
                    "700": "#660f8e",
                    "800": "#490d65",
                    "900": "#390c4e",
                },
                orange: {
                    "500": "#E6712F",
                },
                trueGray: {
                    "100": "#F7F7F7",
                },
               
            },
        },
        plugins: [],

    },
}