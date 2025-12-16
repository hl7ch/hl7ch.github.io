# TC D 03 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC D 03**

## TC D 03

## Test Case D 03: Merging conflict for medicalproblem in three documents

### Precondition

In the ehealth ecosystem of the patient there are several ImmunizationAdministration documents. In three documents the same MedicalProblem entry is entered.

### Sequence

### Result

A Vaccination Record Document is created with the merging result. The duplicated entries are all in the list, but on all duplicated entries the extension is added to make the duplicate entry visible by reference.

### Documents

* [D_D5_HCP1_C1](Bundle-D-D5-HCP1-C1.md)
* [D_D6_HCP2_C2](Bundle-D-D6-HCP2-C2.md)
* [D_D7_HCP3_C1](Bundle-D-D7-HCP3-C1.md)
* [Result. Document D 03](Bundle-RDD03.md)
* [Result. Document D 03b](Bundle-RDD03b.md)

### Entries

* [TCD03_EXPRISK1](Condition-TCD03-EXPRISK1.md)
* [TCD03_EXPRISK2](Condition-TCD03-EXPRISK2.md)
* [TCD03_EXPRISK3](Condition-TCD03-EXPRISK3.md)
* [TCD03_EXPRISK1_2](Condition-TCD03-EXPRISK1-2.md)
* [TCD03_EXPRISK2_2](Condition-TCD03-EXPRISK2-2.md)
* [TCD03_EXPRISK3_2](Condition-TCD03-EXPRISK3-2.md)

