import type { RollupOptions } from 'rollup'
import { nodeResolve } from '@rollup/plugin-node-resolve'
import typescript from '@rollup/plugin-typescript'
import terser from '@rollup/plugin-terser'

export default {
	input: 'main.ts',
	output: { file: 'bundle.js', format: 'iife' },
	plugins: [nodeResolve(), typescript(), terser()],
} satisfies RollupOptions
