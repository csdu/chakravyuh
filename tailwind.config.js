module.exports = {
    theme: {
        extend: {
            fontFamily: {
                inconsolata: ["Inconsolata", "monospace"],
                display: ["Major Mono Display", "monospace"]
            },
            colors: {
                black: {
                    default: "#000",
                    "10": "rgba(0, 0, 0, 0.1)",
                    "20": "rgba(0, 0, 0, 0.2)",
                    "30": "rgba(0, 0, 0, 0.3)",
                    "40": "rgba(0, 0, 0, 0.4)",
                    "50": "rgba(0, 0, 0, 0.5)",
                    "60": "rgba(0, 0, 0, 0.6)",
                    "70": "rgba(0, 0, 0, 0.7)",
                    "80": "rgba(0, 0, 0, 0.8)",
                    "90": "rgba(0, 0, 0, 0.9)"
                },
                white: {
                    default: "#fff",
                    "10": "rgba(255, 255, 255, 0.1)",
                    "20": "rgba(255, 255, 255, 0.2)",
                    "30": "rgba(255, 255, 255, 0.3)",
                    "40": "rgba(255, 255, 255, 0.4)",
                    "50": "rgba(255, 255, 255, 0.5)",
                    "60": "rgba(255, 255, 255, 0.6)",
                    "70": "rgba(255, 255, 255, 0.7)",
                    "80": "rgba(255, 255, 255, 0.8)",
                    "90": "rgba(255, 255, 255, 0.9)"
                },
                primary: {
                    default: "#ffdc34",
                    "10": "#ffdc3419",
                    "20": "#ffdc3432",
                    "30": "#ffdc344b",
                    "40": "#ffdc3464",
                    "50": "#ffdc347d",
                    "60": "#ffdc3496",
                    "70": "#ffdc34af",
                    "80": "#ffdc34c8",
                    "90": "#ffdc34e1"
                },
                "dark-brown": "#0e0101",
                "light-brown": "#543107"
            },
            height: {
                "72": "18rem",
                "96": "24rem",
            },
            translate: {
                'full': '100%',
                '1/2': '50%',
            }
        }
    },
    variants: {
        textColor: ["responsive", "hover", "focus", "group-hover"],
        borderColor: ["responsive", "hover", "focus", "group-hover"]
    },
    plugins: []
};
