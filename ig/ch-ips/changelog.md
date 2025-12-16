# Changelog - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Changelog**

## Changelog

All significant changes to this FHIR implementation guide will be documented on this page.

### STU 2 (2025-12-16)

#### Open Issues

* [#16](https://github.com/hl7ch/ch-ips/issues/16): Conformity to EPS -> EPS not yet published ([confluence](https://confluence.hl7.org/spaces/HEU/pages/248712169/European+Patient+Summary+Edition+1))

See also open issues on [GitHub](https://github.com/hl7ch/ch-ips/issues).

#### Changed / Updated

* [#24](https://github.com/hl7ch/ch-ips/issues/24): Update to the newest published version of UV IPS (v2.0.0) (updated slice names and added new entries according to UV IPS)
* [#22](https://github.com/hl7ch/ch-ips/issues/22): Jurisdictional Patient Summary Specifications: introduction of two validation levels (1. UV IPS and Swiss context, 2. additional EPR context), see [Home](index.md#introduction) and [Document](document.md#profiles)
* [#28](https://github.com/hl7ch/ch-ips/issues/28): Update GTIN for METFORMIN

#### Fixed

* [#2](https://github.com/hl7ch/ch-ips/issues/2), [#27](https://github.com/hl7ch/ch-ips/issues/27): Fixed incompatibility for medication units between CH IPS (UCUM & SCT) and UV IPS (UCUM) through ([FHIR-44765](https://jira.hl7.org/browse/FHIR-44765))

### STU 2 Ballot (2025-05-22)

#### Added

* [#15](https://github.com/hl7ch/ch-ips/issues/15): Add [expansion-parameter](https://build.fhir.org/codesystem-guide-parameter-code.html#:~:text=expansion%2Dparameter,as%20SNOMED%20CT) for the usage of SNOMED CT Swiss Extension

#### Fixed

* [#18](https://github.com/hl7ch/ch-ips/issues/18): Fix (and update) terminology dependency to avoid version mismatch: hl7.terminology#6.1.0 -> hl7.terminology.r4#6.3.0
* [#20](https://github.com/hl7ch/ch-ips/issues/20): Add [pin-canonicals](http://build.fhir.org/ig/FHIR/fhir-tools-ig/branches/master/CodeSystem-ig-parameters.html#:~:text=for%20further%20information-,pin%2Dcanonicals,-Pin%20Canonical%20Versions) parameter to define the handling of unversioned canonical references

### STU 1 (2024-12-17)

#### Open Issues

* [#2](https://github.com/hl7ch/ch-ips/issues/2): Incompatibility for medication units between CH IPS (UCUM & SCT) and IPS (UCUM) -> open [change request](https://jira.hl7.org/browse/FHIR-44765) for IPS

See also open issues on [GitHub](https://github.com/hl7ch/ch-ips/issues).

#### Added

* [#6](https://github.com/hl7ch/ch-ips/issues/6): Add guidance for narrative content

#### Changed / Updated

* [#7](https://github.com/hl7ch/ch-ips/issues/7): Missing display values added
* [#10](https://github.com/hl7ch/ch-ips/issues/10): Update to the newest published version of the IPS (see [IPS changelog](https://hl7.org/fhir/uv/ips/2024Sep/changes.html#stu-200-ballot-update)) 
* Update the external links to the new IPS version
* Updates according to the change of handling empty sections & missing data 
* Remove minimum cardinality of 1 for Composition.section.entry (and .reference)
* Update example 'UC 1.1: Swiss IPS Document' with showing an empty section
 
* Changes on document entries and sections and accordingly the profiles: 
* Change ObservationResults to ObservationResultsLaboratoryPathology and ObservationResultsRadiology
* Remove Media
* Add Flag, ClinicalImpression, CarePlan, Consent and DocumentReference
 
 
* [#5](https://github.com/hl7ch/ch-ips/issues/5): Expansion use case, including validation medical content

#### Issues resolved without amendment

* [#4](https://github.com/hl7ch/ch-ips/issues/4): Known slicing issue in HL7 IPS-UV spec

### STU 1 Ballot (2024-05-17)

Initial published version.

#### Open Issues

* [#2](https://github.com/hl7ch/ch-ips/issues/2): Incompatibility for medication units between CH IPS (UCUM & SCT) and IPS (UCUM) -> open [change request](https://jira.hl7.org/browse/FHIR-44765) for IPS
* [#4](https://github.com/hl7ch/ch-ips/issues/4): Known slicing issue in HL7 IPS-UV spec
* [#6](https://github.com/hl7ch/ch-ips/issues/6): Handling of the narrative text in IPS examples

See also open issues on [GitHub](https://github.com/hl7ch/ch-ips/issues).

