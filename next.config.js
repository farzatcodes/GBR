/** @type {import('next').NextConfig} */
const nextConfig = {
  async redirects() {
    return [
      { source: '/', destination: '/index.php', permanent: true },
    ];
  },
};

module.exports = nextConfig;
