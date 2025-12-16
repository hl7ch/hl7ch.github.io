# TC C 01 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC C 01**

## TC C 01

## Test Case C 01: Correction of own entry

### Precondition

There are three vaccination administration documents for the patient in the ehealth ecosystem. He created a [Document A-D1-P-C1](Bundle-A-D1-P-C1.md) himself and uploaded it to the ehealth ecosystem.

### Sequence

### Result

The patient has created an ImmunizationAdministration [Document C-D1-P-C1](Bundle-C-D1-P-C1.md) changing parameter settings of an Immunization entry in an earlier document. The Immunization and Composititon in the new document have relation information to the old immunization entry and old document composition to declare the replacement.

In the [resulting document](Bundle-RDC01.md) only the new immunization entry will be shown.

### Documents

* [Document A-D1-P-C1](Bundle-A-D1-P-C1.md)
* [Document C-D1-P-C1](Bundle-C-D1-P-C1.md)
* [Result RDC01](Bundle-RDC01.md)
* [Result RDC01b](Bundle-RDC01b.md)

### Entries

* [Immunization (TCC01_IMMUN1_patient)](Immunization-TCC01-IMMUN1-patient.md)
* [Immunization (TCC01_IMMUN2_patient)](Immunization-TCC01-IMMUN2-patient.md)

