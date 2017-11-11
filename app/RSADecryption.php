<?php

namespace App;


class RSADecryption
{

    public $data
        = <<<DATA1
YlD4FpPKUDMU3iIsMbuiI35DM4njrihztQ2OTLo2dma8ei2FaljLhiIA3k9ll2Qgb910pCvLji
p/j4qhwV64gAsxOa5fxzkvfiZEqOD33kuhHJPL7R919xJ6GZyTFd+cPADRPVYW7AUM5c
rnmwrPBmFUHSpTuRTOcVIh4yTzNQtfDFw2eSIISfwEs/SYYcFlFHEA2sMJ6Z1MTLF+w
sEQ5kRJI4Z2swSukIw1sd8Tbe2zRV/VNsHp2ciiFO+rljwIkDLdPtAiC6AstDXZ9FRMs6Be
FleD74Bd/6gCVKVkIkHN+/XdRmrI+TliUEh89TCTfzvqncgOXsHXCXPY3tkXpw==i7cgw
mq8X/NiDjArTRYhif4Xgwp5XADdlYiC+FYgNXfWrkdJpxUFutfR6xR0SWhJ1vt4SL09Oe
a5y5HNNDVgwA223vpdCGz48JnG4zQmZNQqhJLZUsodixqfV80Bwk1kBz/HWRRxJ2jCc
HsIWzfQb/Rar84AB0Sr8i2K5xcuUnsVqmRiYQFeC976S1cFGjZs4udbLhOVX8bGKjZZcqd
YXOB2CVSbthtNp/ZU42tAHQp1ggQYHheigxLPhmDRkPw1EdMN0XADnnJ3eG7MGa6S
MfqkZrCQ94Yhi5GpAI+k8ZtUqh4bdwWVbD9sZhW1bMtP//92qPRERLYjksWEayDWpw
==aPskHrPc6BLKEW+9FI8rIpuYuUc07bqcB0by9oi2/PzgWXBos/wVm7VYrt7Bj275Xki71
KGmiYwVqHhdxB1sDu+Xw5ERgG03QzoaWB6xSB70izXx58dwysAOu78isupmP6UGwJo
wL1JLQFuS9XpXu6MzRX4n5Qu4WzNl1tmlfmrVgu+7pm+2iapxyzo5PwOAn0uUvx67FP
GfwBjxPBJoIlsBenL6Z0qwsq2Dn6xp2hwvggwPwIA8WLujM8DKMM18PrzlZ6Y+ZpyBob
kkKRM5zdFzmvnkd/wDrW+r+b0ryN0j0Xfgq2HJ5d6/ucoDG9+2czJou3Vy2lWlLoKBHTc9
0A==ZYHzesVeqyvWOybDhx5clJM3Tp5JvRZh/dsMhIBoB5ehHLQP3YI+Z6jRIVSzxs+O
GIeSwcYLO1vXDDaGacOpXZZCZNrebqYD0oppufzOYQixBl/HZgPvkioxwwetJL25CTgO
0mBW9cCvuhpjRa9Cq2BldtYLUt0WQeGjdt7YnHgGmrOb3mOkWi3FxCaFAON8mTmwT
0kWtDvKhmNDLG9i6pQvk5LTJjeMQcqbSNIn0pJsUKV1SkPuMcmAJRFLYOlnDILqMzV
sJyUS2k5KuenuhvV+1FoY6T8bDvHBN35Z+Y1Ip1ozM3eYcW7hSaUxwarty1BCudBpHX
CtiUp0+P5yeQ==
DATA1;

    public $privkey
        = <<<DATA2
-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAqUWlepMIfmQjmuAId0/6WTG79b2VwiaxK4LFdVhSjmzr4UE/
qLIbAoA3cnvpFMOlyxmeFqzy6Y8pH6NkYIP3V5TvBNx4v54lV/QYknNX60jrTO0b
JQ/p2vNDLZwXUWS7cD7LsNGcvyj5Wy/fUpw7JDm2y+RlP2kDAGU8G+wKP/DVpP9I
4wL247shPoL91HBkg6IzHCwrumAlKD5UI8LnpgDhOAljw7Ac+V9QBdISF6Z9/Pp1
XMXjYW5wSC/MgPFUANoVB/x4tL7pBdoUuL5EklrZnv9aa+3jy4bdN1q7VdINOxCm
gdWnAE/EJMLH76EjxTWIIpEpZWqwWsovmPt+KwIDAQABAoIBAEUzxQBEpj9N30SM
/MkSeG4IqChCFrymJt57+xALSM0TeKfBji4AioxOMNzsDZFAn0JWOcxZboHP1mcp
3Hqc2P0EVWduXysvk2LO11DgOPxm9lOfx+4yAFBUDY3S97F99idgdNPYDjYUoUUH
YEyctI0Nz06yFDaFTwXVXWqo6FPVDq+BjJeua8XdoKJTvHCHNRqbzUd6mbVOGZb2
D9wv7A8FJ/3EQ7LmBF6prT0G87rhX8tHUmSalIK6gQxw+Fp9rgW08aOLLNFQt8JG
lxMguQPQ9TR1OcQfo7xLY0QsflNQEb5MRFXvIGvOt3ZooM/AM5fgmUswxQKvDlH6
Bf7+7ykCgYEA1XuJB0Nm7w7LBWc6hauKGsevy7D0Iy3eKipyxS4ioHSXqqRTPYv9
xWR9lF8ZShfdyDjVblQHJBNdDcb1aOrpfcIro7WwoNFnhQtM/HLArDKoZUrsyyuD
/13DeiK8sisTfrLZvnR21UL6mxC8qb2bjZms8lxlXV4oblEAJ0ZJPUcCgYEAyvwG
5RzB3O2khDehJisGKoe4u5CPV7+7hSIWXTmGLBY3Vl3IO2E29ZJ5OWnbOAU9IMXh
6wyOxZk8IA/LSdw9DUbD2f0qVNcWSx4LLP2icRHubeTjtegfv7hYp8EtmbjvJF2t
PFx9HSzCNzLsTIhA0CgwAtMFh0Iziyt8Rr5yGf0CgYAIBRIKwc92H5ok49Hg/6a6
htHl1wn04F4+O0YAflEyse6YrH+sCjxIVBQbpM7wZ6EfSnNKJ8H06v1N7TF+9YQ8
AzVcexDdmcBH0TrdKPpv/Z8x3vSyVToqN72GMxPfpZqf4dwoOXvVWyTK+n/76HGV
ijZjDHGKZmUib8yPrSZHNQKBgQCl7pycUoPP3JxuUSN1Fhq2Tbif666iJuReEt2B
W/Lou0iFW6jBkdjhqtlaK8S+6NltnxXtlZhow7k45HBkcpud7MlRu/kM3b8lrOup
3bUbBXOJdmEHZTf+++3NRMfIMDud2M4y19CXNu2VPhWZApEpGJEW3fZY+a81B1lS
Y4DW6QKBgQCVoCfX0MKhHZCMloB27GR3oKiT/+XIwaxubuakzFKGr1NOdlATWUFZ
8unlDvc6s77iXHceHcI5S1MLkPGukspeHQxPqYYmA8ZFCunaCnVLGLJ8cczmN5lb
YV52fgiDRGR3B9bZrpmk6fh+tyW+X4KhRMikCKRTaA6pAY5/fhecxA==
-----END RSA PRIVATE KEY-----
DATA2;

    public function decrypt()
    {
        openssl_get_privatekey($this->privkey);
        $decrypted = '';

        $data = str_split(base64_decode($this->data), 256);

        foreach ($data as $chunk) {
            $partial = '';

            openssl_private_decrypt($chunk, $partial, $this->privkey);

            $decrypted .= $partial;
        }
        return $decrypted;
    }

}