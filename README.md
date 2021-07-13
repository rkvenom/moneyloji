# moneyloji

Steps to run the script.
1. Clone the git repo inside htdocs/www directory and serve it directly through localhost.

Assumptions:
1. No validations are added.
2. The calulations are done for a month of data only, if needed I can setup an date field so that we can always fetch excat number of months user has put in the field.
3. The super rate should be entered without the % sign.
4. The script will return the result irrespective of the firt name, last name, payment period.
5. The only parameters which are reuired are Annual salary, super rate (should be numbers)~

Input :
<img src="data:image/png;base64,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">

Output :
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAmcAAABYCAYAAACwAVBAAAAbOklEQVR4Xu2dPW7cTBKGSyfYO4wiQRhYMJzuCWacCAbWEOxrzAQKBAUKZq6hgaDAcPJpTrCpYWgwEBTJwV5EC5Ld7H92N9n89fsluxabZPdT1dUvq4uck/f393fCfyAAAiAAAiAAAiAAAoMgcAJxNgg7oBMgAAIgAAIgAAIgkBOAOIMjgAAIgAAIgAAIgMCACECcDcgY6AoIgAAIgAAIgAAIQJzBB0AABEAABEAABEBgQAS84uyff/4ZUHfRFRAAARAAARAAARAYJoHfv3/Tzc1N485BnDVGiAuAAAiAAAiAAAj87QQyYfbr1y9KkdQKFmefP3/+27lj/CAAAiAAAiAAAiBgJcB1EsQZHAQEQAAEQAAEQAAEBkCgV3GGDFq1B3z69KncbwarAcyWHrsAX+gRvuPWsEl6m4ApmKYnMJ4r2vy/l8xZJjhS3Hg86ON6mrHhogys4thNrTV8YXgWhU3S2wRMwTQ9gfFcUff/rOcpNFJ0zRkER7XTIFCNZ1K13VP4QtuE468Pm8Qz850Bpj5C8cfBNJ5ZX2dAnPVFPvK+mFSRwCbcHL4wPOPCJultAqZgmp7AeK4IcTYSWyFQjcRQHXQTvtAB5MhbwCaRwAKag2kApMgmYBoJrMfmEGc9wo+5NSZVDK1pt4UvDM++sEl6m4ApmKYnMJ4rTkecHdZ0erGlP5z9bEXPbxv6kP/7QOvTC9ryg8qxcRirr0C1W57Q972L0YLu35/oW3KEmr306yeyXzG2Ga2e32hTOEr4f7slnZRg2uJg706IL5h2Y308rGn5cEVP0QMORxPS8rA+pYtyQvIzuuUY0s/QNqZN/kPLk++kT53Z6pneemYfOiZnOz3WOho2HavVzzuP87tJ2dEdO7SYu7in96c5rddH2mzSR/jGPmhcoOj/jy8TmF9sbNMRZ2xAyqKUO5jkWLslLemJ5D+ld5J2rhiyILdz50zbcuErFk/BucUFlQugUoxJASSBQGskzjLYpUBrkYHFqJW+IC1ei/t3ydfFItN00UznZ9LCp8/VdDfp5EoumwgRWvMhoJPeR94k97Ef9IU91NhiQfa3m/NmC2WVn6eN8ztar+e0qRDNU7GjnSmLqyQlNHhsG8u8tKxRkV7df/PDmtbHDXEtPD1xtl7T8WVLW/bIqixEEGf1HNDm+JIIaG2xN8SZLIiIVPFRb2iNzuopILgXLZ8AG9rTpa+/jazT6cl+cdatgG918Fr21fqgliBDWynOEsb5ECEpxNm47ViVjSQ9q5vF38evaoKjVceqf3FZrPe+LtQaRhGbX27FA/Ukxdl8M6frcktBemKFOKvlNrbMmfgbEcRZtwHbtWiJAFWRpUmwaNZzIttZEGfpWPZ3pbay6D5xliLOc9Hli2F/gzjLqn6MbPuS6GnwW007Wi4fifb7ooxgLNk+acryOSTzn6g429AHpTaBLZ66OFPqhnKrihoq+djinu7pO6u9Kha+qwdRM6NPbKWeJpGjjGFb06gj4luPep0Ir2fgdYAuRqHbmrKtbFug+Xx9pvObou4ws9fty0VZSydPCHUMpshRntBWK3rdZnWOQxBn8Vu+up8+n98UdWCcoTY/lMCtz53ShnqNThUbmziTz1/QavVKW1abps4zvS5RvY/bjur17++JvrPawfz6Vw+idlXfOrf6WRFhYzJnct9mqxWdbbesNk1npbFU+qMdk+aQev17+vLjO6u3La5PUh2pnmWoE7vc4sysHS1tqMUEG4d/VXx4e7de03wTGOe1mmM+ZrPu0f1QYxNnwXbU5orqx23YUeVeteBnfltUaMi1xSYHdazP9Da/FjW3ejzP4u1iQfs9r7is8ms1eVLW8Wa+fvtCF/nc9MTX3ZrW8420JuvtZR4zWt1/oR/fWX163vdsSvD60KpzScTGvNpH0wAGk29aG/tcd9UH6/7P40zTx7DePkJbTtrC44QDMWNflzVnfFJoAUsKcnqq9O7oMoYwqPokdsyN/pqgCHgY4kxzC3mx4ME2/9sVPTDhZQZj2fkP1QWnhnhm95fFnFIbMS9e/DjjtYZy4MuCwC29XHB7FLbJpz6rzeK24//Wa9L0p+y2Mga+yWf3BWmsEfV4so+XovVVBEZuP5UNC3acs7T9UbQ7Yw85WZ8e6avzpRFH5kyye35/HvQM4a0+KNn7yhcexyKQ+dLdURNkIvNeLmyVfhYnztQXlLL5cEdHNl/EQmqPT8Vxdkx/+CnnhbYYPb/R/Fosvtk1ylgm+Urd2OWaB8r1StErL/zC/vm45tU1N1xI5KGdizNvnOcs2H2P2ZrwWjxg044eLgvhWi9zJnN22FHxGy4CeAxsw47u8WYldcEvBGRctTjC7cxZlXa3PZjxvxkP2Kpfz5V4oQqeLANWPDDyeGKLjAdaLx/o6kkV6oY95YeBfFzy7ppqO3EuZ+mwlyRq3Ux8PnKgw+FI1xfqWmR74JuWONPV7WxGZ7dv1hcCShVsE2fsb2UbI7PAjadNjA+WQkvfyus4PgxxFp4h0idyNixd3BzWS3q4enK/KWmrOdP46Ong4t/aZDLS9XlE18QZ/7dYPFSfEE9X5QI6qJoztzizvnHLfNoMsLmlyrebDXHCfP/In7QtL90UT78hvuITZyLjrVxTeRDgb2Rzx/DZ8Zv5IkdpR2573TdEZkEV7mKMMZkzmW8R1KnkXS4MFQXZZqzSxyzs51o0jFhW2pwzCI9dYQ8ppl1yixmLprCnf1tTtFWyGHKc132F/buor7Jwd8Rf+7amztm8nm27it+iFTtWjvdDhThjvap4GzZGnJkPGbI43outR+bnRjYz9AFTKdOo2D3wznFzzpTJHctujBoHhLg346nfR8y1yJ6Nn5w40z+jYRYL2l4hLt7w1EH7xZn9teuwhapatY1HnKkM7Cl89qTie03bK85cn9xwL7KCsvnUXnyKxSLOlCct6cl/UOJM3pqwCCPHCxx2cWaKE9ubqc4iXK0kQHljWnHzmuKsyi+MICw9jbseqiICtzpLhS+kFme2h8VSfhrCWLdXHXFWP3Z5xZmSAXeXCujZjhhx5ozzldl3lmlPkDmzi2wh1mxF6lWZp6J9DTt6dhusTG212NJ1woWIJW6UD8FmOZA8l/Sst561c62O5tY0b6n5WcQcd/fFbY+QzJnzQcxIFPw14syWJSkGL29blTVkjTJnNuesmSrTThu+OFNTwLyuxVWPN5st6MvPiqxZYaBiW9r5FGV52nEs/mZwnFrmTM1CVKX15WN1M2fis3COjIgl5W/OhIbiTBLSpuh2ZUDrZM58flZ/W9MVsO2ZmmKUrWRcHAtESPRyijO+ICp1PVX1TOqxOHHmiPOVn7vx29XIcikZYV9WRIgzW5F6K3b0fN7HJc5Obs6l74KqftaKOHPEdDOjW+WB2YsA+gsL0kOGnNWvIc6QOfv8Oaef5ofPs8lyTfM3y4dRmXHO+LeflKyHqPmQJ1F85kzKXiipUEefQiIfazMMcVbxFqAipMR+vlMkhKStPYFGWaikoLlbntLxLvuwbJVYNo/5as6c/hC0hRdhbE/TWt85i8qcCWHsrjm7JPrJPt6b24nV8Tyc0iX9ZB9aLRi7ay4dgVS3u+EHUsaUB+BsfNdzensSRbiu2kEjC+gN3HItjMhKCj8LEWfy3PEt6pn0tQjX3ZJOj3f0tmH1kgE1Z+HbmvVjl0ucKdtgZbG0GkOyOZf5y0+6VF9GqXjJosiSBcZ5G0fJV+Q+3r5cZyu99aPaQixH2rH0XXGeEZ+S2tHiN9J4neLMKEUwt7XV+CeyjmLNtPus8oAtxSG5ZKLw6w/iwSNgfcj68/hV/pajnHTJ/r9tl8O1q2IT6uE1ZwUDG5OQuS6XkTzT+WNRQ/c/7YWYbERy3WXdFaX7FwK0vXLrt06U9K2cxp/RanVGW/ZxtPxckr8AT7Qo38wrkKhvF6nFk2qNT4WgiaDblziz1StZi2e1t2PFW3b2bQzbpBI47NuVru/X6KltfUuguK661eeyUbXt1H7NFov89e38hycCgkmEuSubhviCtc5M66Odm2QF7Sv+gn9WhHtNL6972rNf3RAibknXL6+0FweMJ3JVVMtDzWz0lR7lL+svFrTgr8jnZrS97OEuXmazVfoVCG37brGi1etW+fWQ1Zn4TqIc4Kt4mTZx/0JAKUSKSEKFG5U/XyL6an3LmX1Uu+KY2k81tuUItVhmfSBlfav89Qy9D8yUxrZQcVPBOfPDn0SX/BdddBuwuWp9WzM6zmc312wuzwPL9p06+ezbvdkYQ+1YOc9asaN7vC5xpoh+DkCvJ1X6OqPZ7A/9YW6rvKiSefVsRn/4QT02usZc+VarbJWAUiSpufymPlu8SZ3j6lvhRZjhoq/Cd4pAJv0ykclEfomwaq7bxP/kPqWRagEc2nVCFuSh9dnVn0P2AcnNpoWffRoLgWb9nJIvNCMxnLNhk/S2ANOxMW2vrCc9ieFfEeJs+DbKezjuQCWlh5/P6XEAv+04ErNbuzluXxgzeXffYZP0dgXTsTGFOEtpMYizlDRbvNbYA1W5zdbh9l+L5uj10mP3hV7htXRz2CQ9WDAdE1OzFMVVhpJ+VNO8IsTZSOyKQDUSQ3XQTfhCB5AjbwGbRAILaA6mAZAim4BpJLAemw9GnN3e3tLHjx97RDH8W2dvtGb/gdXwbdV2D+ELbROOvz5sEs/MdwaY+gjFHwfTeGZ9ncFtxf+3l7c1+xo87gsCIAACIAACIAACQyUAcTZUy6BfIAACIAACIAACfyWBXsUZv/lfST5g0J8+faKbm5u8JVgFAJtwE/jC8IwLm6S3CZiCaXoC47mizf972dZM8wsB4wEf21MUcsYSm257+MLwbAubpLcJmIJpegLjueJgXgiAOKt2GgSq8UyqtnsKX2ibcPz1YZN4Zr4zwNRHKP44mMYz6+sMiLO+yEfeF5MqEtiEm8MXhmdc2CS9TcAUTNMTGM8VIc5GYisEqpEYqoNuwhc6gBx5C9gkElhAczANgBTZBEwjgfXYHOKsR/gxt8akiqE17bbwheHZFzZJbxMwBdP0BMZzRYizkdgKgWokhuqgm/CFDiBH3gI2iQQW0BxMAyBFNgHTSGA9Noc46xF+zK0xqWJoTbstfGF49oVN0tsETME0PYHxXBHibCS2QqAaiaE66CZ8oQPIkbeATSKBBTQH0wBIkU3ANBJYj80hznqEH3NrTKoYWtNuC18Ynn1hk/Q2AVMwTU9gPFcchzjbLenk+16iOqPV8xttPlSDPqxP6WJ7RvfvT/StoU2Ka/1xXmVx/05PTW9S0ce4QHWg9ekFbWlFz28b8mBqSCbm9B0tT77T6+qZ3nzGi7ksEe2WJ1S6yOKe3i3GKGxIQb4TeftGzWP9NM4XGnUt+mTFDqTP08L++Uye2XzTd5x3p/Dvl9t251zM4Adjk8OaTi+2VESqhRH7lDhmsYHveAyTpm2HwDTn8XJrxBPh57a1iMVftlzM9Hin2ChsLWvKkp8/BKb1x+Ke983iTv0etXnmOMRZToA5/Jl94dUhiSBjBqj6QIvFgzQhVjqGdcGpfzf5zPBJFbrApelX+FVEv4xgFX4Ra8uM/+NXtlCzwHfmspEhGBrevOHpdfw03Bcadi729MOalg9X9GQV3sX8/fGlEOb5uH98kR4efMdFZzizth+IYoY/CJvkvv+DvrAHV0P075Z0erxjD0ZsPsoxy3c8BkiCtr0z5SJKe9hTfFdjbq5Tql8T7Wh5eqQ79tBcrB3dCbTemTbwC+e8bxR3GnSo5VMnK85yOZcwc1bYwS7OxL3+UGrhUfeJx1z8WvakoMu3kTk70OHwgT5I6cEs4N2cW7JzRiAN6nTrjWL9dKgBdrdcEj05stRZ9vvm3BBjZfbLd5xbIQ/ERLTdGg9JrRuq4gZDsInp97IwIFqvj7TZSOn9fEfilWWSD57j3dPtl+mB1oWj0ZbkhEAWw27oXNq5UbNr5hohHz+s13TcbKSdnDZiottW/TJt4EMV875R3GnQpbZPhTiLIuwWZ+UT05+UmTrRudhJ9feIM92A2YJ0TfM3i0iAOIvy9qjG8laNJYOcZwiURY5tRbO/+Y4XfSkWzKunOV1bMthR/U3cOHZ+Jr59ubPAM5P8+jnXV0d5g28++I6nH4RyxT6ZHtZLerh6ovm15re5oM2eC6T4ovyNZSSlbJuS2TeY6Zm1dqH2ybT+yCrmfcO4U79P7Z85enGm14LJWx0iI/GVHnmtizRpfMdN/FXijNc9ySlqaYsxu5ixaKnHq7ZpYieVXZxJW8NfH8s6vvy+c1GromT/lPoIbQz8yXt1RtvtXhqfOi5xPfGU+JMuWQ1fypR+Nr5Lop+OekTHYuP2g3lRu5fVjmi2U2sciITt+BhXdLbd0r7cRlXrUKiBH8b6QvthRL4DH6dsV/sCJHz0ih6kLU+RJFO3PvmCuflQPQ+7HW9xt/5tYi/7qBRnRrZSI+c73jLo3phK22T6Q4M1rupxhdVI53Hv6oFOr+f05ixINjNxbWLtjWmDQYXN+zpxZ0j12CagUYszfaLoe9JGPY+Uxr96kAv8WbZLSfPbvKl6UVDvr7fVazyyfz/SV/4E5nlKjZ1Urpqe8p0GJg6MejnlKVBbVOV6LpJe0lBqMtRxq0X4et0ZFeInsI6wcn5rItIqdC2MVXEv+0FWts4FhmZL7elZLIBFRqd4dUXOoGocWfDmfazyU1v5VqwvNIiLtU9V/S+BOFPqSiDObIYxa3Kq63SrMzrFw2ZZy1nbE+qf2I+f8yxNsXDXEmdlSc0fx4svEpMsFjx+tb7AVJ+c+8x+mDYYSeS8j4s7EGdWy2ROkv33+fPn8n/53+ym1AONLUCrbYxaHl/BrDeNH545y8WfUvCcz/SyxkMVh2LErpq12EnlzZyxJzmjnUugSm/MlsLH0latv9AtadZX2LazGkzlrNCweFvN9nKGN3PGtiqMdq66ECkbVt7P0taTgfD5qc4j1hca8ax9spwRsIszIWrtmTM563Ncr2m+4cEU4sxlFj2jm7WzxpTMx6syOr7jtf0i/MRe/Hy3pvV8U34JIEicGXGQFf3/JLp0xaIcQ0UJRjimqJa9MI3qodp4Fz3vY+IOxFk74qzqrTxWY0H6CwGtijO+UBcZE7LVekh9vjvaX9F2+XHspEomzpQ3lrJhSW+rWsRZtdiKE2f6lnXoyxbOeruE4kx+y0oV4uYYffV/0xRn6hazr6as8vjdUfo8hDZDWnxDOmZNiZ2fMdeu3dZWH5VfTH1j0Ly+73jtHkWd2D1TrfRA6S3Loh99NWf65x7c2cvd8pSOd/5PQkVB8zTunmmD3uslNfKlnPM+Lu406F3rp45uW1MUvJqFl3nYkQqPfYue77g1aDkKkbmQ4AJC3c5jV5LEgTWzVmHu2EmVRpzZt2bLT4m4Mmd6xrAcV5w4q+39rq2CROLMup1ejtmROdOLiKXBxfphrC/U5tjoRG2BN7KHlq1i5W3OquwYMmd+07gY+bI1vuP+O6dqMQQ/Nx8azBoxpY0txmR/y0thRaYmm/PX87dWv41ps8MQmNb3j5B5Hxl36nem9TMHL86KDEWWjbqjo1bsbdRYRGbGYhdF16c0yq0ES+3VXlL46kS3iMvDmtbHDclvu3MPiJ1U9kJg8ymueltTExparZS8TVvWRrGnHZI/vLhb0pKe6OlbF+Ks4qUAx5at3w/UfqvtGdPyg7+2LVC7rfk3wfz3V+NArC+0HkUsNzDrldSMgqsmkn9aozrbGBKkux31oGwiF6QrRYu2ubGj4gso2Sc2fMf/Pqa2jK5SuuEogdjrL/xIH7LNzr+kn8qHuCs/B5EQ+6D8NHpc/nkfH3eiO9HZCYMXZ4UAYCXWlq/wq1tf4g0x9e8Lun8+p5vyy9lE/17M6L97/sV/87heUK5vsakWcr1xKArg8/b6l+ur3oTUXCB8Umn3rHhb8Pn8RvrVgwXd3xN9Lz+zX4wpf5Wc/zjDYkGL/T4veJ8t/k1/9v9lvdTGbx2XXCxf1MHcvlyIa9fennKNVwWo1+KoGc4qP8ihsCJ/Vr+TvYFV+tKMFguife5LF3RBz/TMqShfBtf7WWx/z5VfnvD7YXbpcF/oLI6ov9CQu7rt6/0Sg0a/EOAP0t2NvLjTEGwifNz2OR/d/wShwla+410THRBT7RMwGQnB2hb73XHfVhNoXRtawj0EP60/NHPeu9+al+/iizv1e9TmmcMXZ22OfkTXHvekGhHoEXQVvjA8I8Em6W0CpmCansB4rghxNhJbIVCNxFAddBO+0AHkyFvAJpHAApqDaQCkyCZgGgmsx+YQZz3Cj7k1JlUMrWm3hS8Mz76wSXqbgCmYpicwnitCnI3EVghUIzFUB92EL3QAOfIWsEkksIDmYBoAKbIJmEYC67E5xFmP8GNujUkVQ2vabeELw7MvbJLeJmAKpukJjOeKEGcjsRUC1UgM1UE34QsdQI68BWwSCSygOZgGQIpsAqaRwHpsDnHWI/yYW2NSxdCadlv4wvDsC5uktwmYgml6AuO5IsTZSGyFQDUSQ3XQTfhCB5AjbwGbRAILaA6mAZAim4BpJLAemw9GnN3e3tLHjx97RDH8W/MfiQer4duq7R7CF9omHH992CSeme8MMPURij8OpvHM+jqD24r/bybYmv538v7+/l51EX4TftOmN8T5IAACIAACIAACIDA1AhBnU7MoxgMCIAACIAACIDBqAp2Ls9+/f9OvX79GDQ2dBwEQAAEQAAEQAIG2CXSyrZnVTUGYtW1KXB8EQAAEQAAEQGAKBDoRZ1MAhTGAAAiAAAiAAAiAwFgIeF8IGMtA0E8QAAEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAwBiLPJmBIDAQEQAAEQAAEQmAIBiLMpWBFjAAEQAAEQAAEQmAyB/wP6fPDZimVQPQAAAABJRU5ErkJggg==">
