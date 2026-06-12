# Changelog - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Changelog**

## Changelog

All significant changes to this FHIR implementation guide will be documented on this page.

### 1.0.0-ballot (2026-06-12)

### Refdata DSTU 1: Updates from new version of Swissmedic Business Implementation Guide V2.0 (March 2026)

#### Update Profiles

* Chapter 2.1.1: Regulatory Authorisation Type
* Chapter 2.2.3: Marketing Status start date
* Chapter 2.2.4: Marketing Status end date
* Chapter 4.3: Package Item (Container)
* Chapter 4.3.1: Package Item (Container) Type
* Chapter 4.3.2: Package item reference(s)
* Chapter 4.3.3: Manufactured Item reference(s)
* Chapter 5.2.3: Substance reference strength
* Chapter 5.2.3.1: Reference substance
* Chapter 5.2.3.3: Reference strength (Presentation)
* Chapter 5.2.3.4: Reference strength (Concentration)
* Chapter 6.1: Pharmaceutical Product description

#### Update Examples

* PADCEV20
* PADCEV30
* XOSPATA
* COMPREHENSIVE (Full Example Product)

#### Update Identifier

* Chapter 1.1.1: MPID
* Chapter 4.1.1: PCID
* Chapter 2.3 and 2.4: Swiss Location Identifier / Partner Identifier

### Fixes from HL7 Ballot on epl issues - transfer from ePL corrections to CH-IDMP (February 2026)

#### Fixes

* [#13](https://github.com/bag-epl/bag-epl-fhir/issues/13): Missing line breaks
* [#14](https://github.com/bag-epl/bag-epl-fhir/issues/14): Empty "Cross Version Analysis" section
* [#18](https://github.com/bag-epl/bag-epl-fhir/issues/18): Validatable bundle
* [#19](https://github.com/bag-epl/bag-epl-fhir/issues/19): Model lacks the ability to add multiple packages for a medical product
* [#21](https://github.com/bag-epl/bag-epl-fhir/issues/21): Link to FOPH is broken
* [#23](https://github.com/bag-epl/bag-epl-fhir/issues/23): LOC identifier
* [#25](https://github.com/bag-epl/bag-epl-fhir/issues/25): Documentation
* [#26](https://github.com/bag-epl/bag-epl-fhir/issues/26): Inconsistencies DE/EN
* [#27](https://github.com/bag-epl/bag-epl-fhir/issues/27): Profile Names
* [#28](https://github.com/bag-epl/bag-epl-fhir/issues/28): Home Documentation
* [#31](https://github.com/bag-epl/bag-epl-fhir/issues/31): Fix non-resolvable links / Introduce temporary NamingSystems
* [#32](https://github.com/bag-epl/bag-epl-fhir/issues/32): Home Dependencies to CH-core
* [#47](https://github.com/bag-epl/bag-epl-fhir/issues/47): Link to FOPH is broken
* [#48](https://github.com/bag-epl/bag-epl-fhir/issues/48): LOC identifier
* [#49](https://github.com/bag-epl/bag-epl-fhir/issues/49): Fix non-resolvable links / Introduce temporary NamingSystems

#### Changed / Updated

* Changed hl7.terminology.r5 version to 7.0.1
* Changed hl7.terminology.r5 version to 7.0.0
* Changed hl7.terminology.r5 version to 6.5.0
* Graphic of the business datamodel & datatable
* Hide documentation for authorised medicinal product as this information is under revision at Swissmedic.
* Alignment and translated the example product descriptions.
* Removal of the attribute "Disease Status", as Swissmedic has not yet defined a value list for this element.

#### Update

* New example product Abrilada containing 2 pack sizes plus 7 limitations to illustrate multiple pack sizes and multiple limitations.

#### Changes in the datatable

Change comment: Even when the datamodel indicates the cardinalities vice versa, in FHIR the pointer direction in the FHIR structure is in oposition to the pointer direction in the business data model. Hence, the business datamodel indicates 1..* packaged medicinal products pointing to 0..1 Reimbursement Authorisations each. But in the FHIR structure a Reimbursement instance is created, and the Reimbursement instance is pointing to the related Packaged Medicinal Product. This is the reason for the reversed cardinality.

