# TC A 02 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC A 02**

## TC A 02

## Test Case A 02: HCP from G2 applies and records second dose of vaccination (hepatitis A).

### Precondition

A vaccination for hepatitis A is already found in the patient's vaccination documentation which is stored in the ehealth ecosystem. The documents of [Test case A 01](TC_A01.md) are a prerequisite. Any vaccination check carried out with the available data indicates a second dose of hepatitis A.

### Sequence

The practitioner HCP1 who administered the vaccination for hepatitis A to the patient creates an ImmunizationAdministration document [A-D4-HCP2-C2](Bundle-A-D4-HCP2-C2.md) with the data on the applied immunization and loads it up to the ehealth ecosystem of the patient.

### Result

The newly delivered second dose of the hepatitis A vaccination can be found in the patient's EPR ([Result. Dokument A 02](Bundle-RDA02.md)).

### Documents

* [A_D1_P_C1](Bundle-A-D1-P-C1.md)
* [A_D2_HCP1_C1](Bundle-A-D2-HCP1-C1.md)
* [A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md)
* [A_D4_HCP2_C2](Bundle-A-D4-HCP2-C2.md)
* [Result. Dokument A 02](Bundle-RDA02.md)
* [Result. Dokument A 02b](Bundle-RDA02b.md)

### Entries

* [Immunization TCA02_IMMUN4_HCP2_ORG2_ROLE](Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.md)

