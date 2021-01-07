# Multiplayer requirements

Flipside Studio supports recording up to **5 actors at a time** over distances large or small. Flipside Studio offers two modes of connecting over multiplayer (peer-to-peer and server-based), so you can choose the mode that's best for your type of production.

## When to use peer-to-peer or server connections

**Server-based multiplayer** connections should generally be compatible with a wider range of networks and network conditions, and in cases where users are geographically farther away from each other, they typically provide a lower latency and more consistent connection, too.

If users know that they are geographically near to each other, such as on the same local network or in the same city, **peer-to-peer multiplayer** may be able to achieve lower latencies than a server-based connection.

However, not all networks allow peer-to-peer connections, and not all networks are able to provide a stable peer-to-peer connection. If peer-to-peer fails, or you experience hiccups in your connectivity that may result in characters momentarily freezing or voices cutting out, then you can try the troubleshooting steps below to test and configure your network.

## Bandwidth requirements

- 5 Mbps upload
- 5 Mbps download

## Ports used

- 10,000-60,000 -  UDP/SRTP/SRTCP
- 12,777 - WSS/TLS
- 443 - HTTPS/TLS
- 3478 - UDP

## Troubleshooting

If you're having trouble connecting via peer-to-peer, use the following tools to help diagnose the source of the issue:

- [WebRTC Troubleshooter](https://test.webrtc.org/)
- [WebRTC Diagnostics](https://networktest.twilio.com/)

Reflexive connectivity is a frequent source of connectivity issues, in particular.

---

Next: [[ What's new ]]
