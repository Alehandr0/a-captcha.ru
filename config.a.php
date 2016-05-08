<?  # KCAPTCHA configuration file № 1

class Kap4a_config_a
{
function __construct()
{
# do not change without changing font files!!!!
    $this->alphabet="0123456789abcdefghijklmnopqrstuvwxyz"; 

# symbols used to draw CAPTCHA
    $this->allowed_symbols="236789admpxy";

# CAPTCHA string length
    $this->length=mt_rand(5, 7); # random 5 or 6 or 7

# паттерн забракованных знакосочетаний
    $this->bad='/cp|ep|cb|eb|ck|ek|c6|c9|e6|e9|rn|rm|mm|nm|mn|nn|co|do|cl|db|qp|qb|dp|ww/';
}
}
new Kap4a_config_a;
