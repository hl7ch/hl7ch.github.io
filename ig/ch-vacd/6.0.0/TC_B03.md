# TC B 03 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC B 03**

## TC B 03

## Test Case B 03: Expositionrisk (Working in healthcare)

### Precondition

There is a ImmunizationAdministration document for the patient in the ehealth ecosystem with different Immunization entries.

### Sequence

The practitioner HCP1 creates a ImmunizationAdministration document with an entry declaring the patient as working in healthcare (expositionrisk) and stores it to the ehealth ecosystem.

### Result

The Condition entry for expositionrisk can be found in the vaccination status of the patient in the ehealth ecosystem.

### Documents

* [B_D1_HCP1_C1](Bundle-B-D1-HCP1-C1.md)
* [B_D4_HCP1_C1](Bundle-B-D4-HCP1-C1.md)
* [Result. Dokument B 03](Bundle-RDB03.md)
* [Result. Dokument B 03b](Bundle-RDB03b.md)

### Entries

* [Exposition Risk Condition TCB03_EXPRISK1](Condition-TCB03-EXPRISK1.md)

