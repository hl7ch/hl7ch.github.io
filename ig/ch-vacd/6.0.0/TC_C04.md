# TC C 04 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC C 04**

## TC C 04

## Test Case C 04: Cancel entry of other community

### Precondition

There is a ImmunizationAdministration document containing a entry for expositionrisk created by the practitioner HCP2 for the patient and stored in the ehealth ecosystem.

### Sequence

The practtiioner HCP1 creates a ImmunizationAdministration document with entered-in-error for the expositionrisk and stores it into the ehealth ecosystem.

### Result

The practitioner HCP1 created an ImmunizationAdministration [document C_D5_HCP1_C1](Bundle-C-D5-HCP1-C1.md) which entered-in-error the Condition defining the exposition risk entry of the [document C_D4_HCP2_C2](Bundle-C-D4-HCP2-C2.md).

In the [resulting document](Bundle-RDC04.md) only the new/corrected immunization entry will be shown.

### Documents

* [C_D4_HCP2_C2](Bundle-C-D4-HCP2-C2.md)
* [C_D5_HCP1_C1](Bundle-C-D5-HCP1-C1.md)
* [Result. Document C 04](Bundle-RDC04.md)

### Entries

* [Exposition Risk (TCC04_EXPRISK1)](Condition-TCC04-EXPRISK1.md)
* [Exposition Risk - correction (TCC04_EXPRISK2)](Condition-TCC04-EXPRISK2.md)
* [Exposition Risk (TCC04_EXPRISK3)](Condition-TCC04-EXPRISK3.md)

