# TC C 03 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC C 03**

## TC C 03

## Test Case C 03: Cancel entry own community

### Precondition

There is a ImmunizationAdministration document with the entry for expositionrisk for the patient in the ehealth ecosystem.

### Sequence

The practitioner HCP1 creates a ImmunizationAdministration document with entered-in-error for the expositionrisk and stores it to the repository of the reference community C1.

### Result

The practitioner HCP1 created an ImmunizationAdministration [document C_D3_HCP1_C1](Bundle-C-D3-HCP1-C1.md) which entered-in-error the Condition defining the exposition risk entry of the [document B_D4_HCP1_C1](Bundle-B-D4-HCP1-C1.md) in the ehealth ecosystem.

In the [resulting document](Bundle-RDC03.md) only the new/corrected immunization entry will be shown.

### Documents

* [B_D4_HCP1_C1](Bundle-B-D4-HCP1-C1.md)
* [C_D3_HCP1_C1](Bundle-C-D3-HCP1-C1.md)
* [Result. Document C 03](Bundle-RDC03.md)
* [Result. Document C 03b](Bundle-RDC03b.md)

### Entries

* [Medical Risk Condition](Condition-TCC03-EXPRISK1.md)

