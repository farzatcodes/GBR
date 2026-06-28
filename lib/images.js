import fs from 'fs';
import path from 'path';

export function findImage(...candidates) {
  for (const c of candidates) {
    if (fs.existsSync(path.join(process.cwd(), 'public', c))) return c;
  }
  return null;
}
