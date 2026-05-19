import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                amber: {
                    50: '#E8F5F0',       // Background Light (mint very light)
                    100: '#D1ECE2',
                    200: '#A4DBC5',
                    300: '#77CBA8',
                    400: '#4ECDA4',      // primary-light (Hover state)
                    500: '#2EAD7A',      // Primary / Brand (Hijau teal)
                    600: '#258F63',      // custom mid shade
                    700: '#1E8A5E',      // primary-dark (Pressed state)
                    800: '#176C49',
                    900: '#104F34',
                    950: '#082D1D',
                },
                slate: {
                    50: '#F9FAFB',
                    100: '#F3F4F6',
                    200: '#F0F0F0',      // Text Primary
                    300: '#D1D5DB',
                    400: '#9CA3AF',      // Text Secondary (abu muted)
                    500: '#6B7280',
                    600: '#4B5563',
                    700: '#3F4349',      // border dark (Garis pemisah)
                    750: '#33373D',      // bg-hover (Hover row/item)
                    800: '#2A2D32',      // Surface Dark / bg-card (Card, modal)
                    900: '#1E2024',      // Background Dark / bg-surface (Halaman utama)
                    950: '#161719',      // bg-base (Background terdalam)
                },
                gray: {
                    50: '#F9FAFB',
                    100: '#F3F4F6',
                    200: '#F0F0F0',      // Text Primary
                    300: '#D1D5DB',
                    400: '#9CA3AF',      // Text Secondary (abu muted)
                    500: '#6B7280',
                    600: '#4B5563',
                    700: '#3F4349',      // border dark
                    750: '#33373D',      // bg-hover
                    800: '#2A2D32',      // Surface Dark
                    900: '#1E2024',      // Background Dark
                    950: '#161719',      // bg-base
                },
                indigo: {
                    50: '#E8F5F0',
                    100: '#D1ECE2',
                    200: '#A4DBC5',
                    300: '#77CBA8',
                    400: '#4ECDA4',
                    500: '#2EAD7A',
                    600: '#258F63',
                    700: '#1E8A5E',
                    800: '#176C49',
                    900: '#104F34',
                    950: '#082D1D',
                },
                rose: {
                    50: '#FEF2F2',
                    100: '#FEE2E2',
                    200: '#FECACA',
                    300: '#FCA5A5',
                    400: '#F87171',
                    500: '#EF4444',      // Overdue: #EF4444
                    600: '#DC2626',
                    700: '#B91C1C',
                    800: '#991B1B',
                    900: '#7F1D1D',
                    950: '#450A0A',
                },
                yellow: {
                    50: '#FEF3C7',
                    100: '#FEF3C7',
                    200: '#FDE68A',
                    300: '#FCD34D',
                    400: '#FBBF24',
                    500: '#F59E0B',      // Pending: #F59E0B
                    600: '#D97706',
                    700: '#B45309',
                    800: '#92400E',
                    900: '#78350F',
                    950: '#451A03',
                }
            }
        },
    },

    plugins: [forms],
};
