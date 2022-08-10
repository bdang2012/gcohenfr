---
layout: page
title: R-packages
---

# [riv](https://cran.r-project.org/web/packages/riv/index.html): Robust Instrumental Variables
`riv` is an R-package to compute robust instrumental variables estimators of linear models based on a high break- down point S-estimator of location and covariance. The model can contain both continuous and categorical variables. The package also includes the computation of the classical non-robust two-stage least squares estimator (2SLS).

**Reference**: ***Gabriela Cohen Freue***, Hernan Ortiz Molina, and Ruben H. Zamar. (2013) A Natural Robustification of the Ordinary Instrumental Variables Estimator. *Biometrics* ***69***, 641-650.
[PubMed](https://www.ncbi.nlm.nih.gov/pubmed/23865476)

# [mdqc](https://www.bioconductor.org/packages/release/bioc/html/mdqc.html): Mahalanobis Distance Quality Control
`mdqc` is a multivariate assessment method, available in [Bioconductor](https://www.bioconductor.org), to examine the quality of microarrays based on quality control (QC) reports. The Mahalanobis distance of an array's quality attributes is used to measure the similarity of the quality of that array against the quality of the other arrays. Then, arrays with unusually high distances can be flagged as potentially low-quality. 

**Reference**: ***Cohen Freue GV***, et al. (2007)  MDQC: a new quality assessment method for microarrays based on quality control reports. *Bioinformatics* ***23***, 3162-3169. [PubMed](https://www.ncbi.nlm.nih.gov/pubmed/17933854) 

# [pgca](https://bioconductor.org/packages/pgca/): Protein Group Code Algorithm
`pgca` is an algorithm to link lists of protein groups identified from MS/MS spectra of multiple experimental runs. PGCA creates a mapping of local into global protein groups by comparing the protein identifiers of groups across runs. Assigning common protein group codes (PGC) to all proteins within each global group allows the comparison and statistical analysis of lists of protein groups instead of single protein identifiers. Package available in the new release of [Bioconductor](https://bioconductor.org/packages/pgca/) and in [GitHub](https://github.com/gcohenfr/pgca).

**Reference**: David Kepplinger, Mandeep Takhar, Mayu Sasaki, Zsuzsanna Hollander, Derek Smith, W. Robert McMaster, Raymond T. Ng, ***Gabriela Cohen Freue***. PGCA: A New Algorithm to Link Protein Groups Created from MS/MS Data. Accepted in *PLoS ONE*.

# [pense](https://cran.r-project.org/package=pense): Penalized Elastic Net S-estimator
`pense` is an R-package to compute robust sparse estimators of linear models that can be used to identify a useful subset of explanatory variables while protecting the resulting estimator against possible aberrant observations in the data set. Using an Elastic Net penalty, the resulting estimator can be used to select variables, even in cases with more variables than observations or when many of the candidate explanatory variables are correlated. Robust LASSO and Ridge S-estimators are particular cases of PENSE. The package also includes the computation of elastic net MM-estimators. 

**Reference**: ***Gabriela V. Cohen Freue***, *David Kepplinger*, Matias Salibian-Barrera, and *Ezequiel Smucler*. PENSE: a Penalized Elastic Net S-Estimator. To be submitted to the *Annals of Applied Statistics*, with accompanying CRAN library. [pdf](https://gcohenfr.github.io/pdfs/PENSE_manuscript.pdf).
