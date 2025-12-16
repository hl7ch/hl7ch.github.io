# TC C 02 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC C 02**

## TC C 02

## Test Case C 02: Correction of foreign entry

### Precondition

There is an ImmunizationAdministration [document A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md) created by practitionerHCP2 and stored into the ehealth ecosystem.

### Sequence

The practitioner HCP1 creates and ImmunizationAdministration document to correct an entry of prctitioner HCP2 and stores into the ehealth ecosystem.

### Result

The practitioner HCP1 has created an ImmunizationAdministration [document C_D2_HCP1_C1](Bundle-C-D2-HCP1-C1.md) which corrects some parameters of an Immunization entry of the [document A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md).

In the [resulting document](Bundle-RDC02.md) only the new/corrected immunization entry will be shown.

### Documents

* [A_D3_HCP2_C2](Bundle-A-D3-HCP2-C2.md)
* [C_D2_HCP1_C1](Bundle-C-D2-HCP1-C1.md)
* [Result. Document C 02](Bundle-RDC02.md)
* [Result. Document C 02b](Bundle-RDC02b.md)

### Entries

* [Immunization (TCC02_IMMUN3_HCP1_ORG1_ROLE)](Immunization-TCC02-IMMUN3-HCP1-ORG1-ROLE.md)
* [Immunization (TCC02_IMMUN4_HCP1_ORG1_ROLE)](Immunization-TCC02-IMMUN4-HCP1-ORG1-ROLE.md)

