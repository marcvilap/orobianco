import type { Config } from 'tailwindcss'

export default {
	content: ['./**/*.{php,ts}'],
	theme: {
		screens: { xs: '430px', sm: '640px', md: '768px', lg: '1024px', xl: '1280px', '2xl': '1440px' },
		container: { center: true, padding: { DEFAULT: '1rem', md: '2rem' } },
		extend: {
			fontSize: {
				'5xl': ['2.75rem', '3.25rem'],
				'4xl': ['2rem', '2.5rem'],
				lg: ['1.125rem', '1.5rem'],
			},
			colors: {
				neutral: {
					400: '#848484',
					500: '#737373',
					800: '#333333',
				},
			},
			transitionDuration: { 
				DEFAULT: '300ms',
				slow: '500ms',
				'very-slow': '700ms',
				fast: '200ms',
        'very-fast': '100ms', },
			fontFamily: { sans: "'Red Hat Display', sans-serif" },
		},
	},
} satisfies Config
