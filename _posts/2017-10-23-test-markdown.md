---
layout: post
title: PENSE and PENSEM 
subtitle: Penalized Elastic Net S- and MM- estimators
---

Joint work with Dr. Matias Salibian-Barrera, and David Kepplinger and Ezequiel Smucler from my team. With accompanying R-package available in CRAN (see Software tab). Link to the manuscript available under Publications.

PENSE and PENSEM can be used to identify a useful subset of explanatory variables while protecting the resulting estimator against possible aberrant observations in the data set. Using an Elastic Net penalty, the resulting estimator can be used to select variables, even in cases with more variables than observations or when many of the candidate explanatory variables are highly correlated. Robust LASSO and Ridge S- and MM- estimators are particular cases of PENSE and PENSEM. Our robust penalized estimators have very good theoretical and numerical properties. We also propose an efficient algorithm to compute these estimators and to select the penalty term, which is a critical part of any application with real data (implemented in the R-package [pense](https://cran.r-project.org/package=pense). For more details about this study, see the full manuscript [here](https://gcohenfr.github.io/pdfs/PENSE_manuscript.pdf).