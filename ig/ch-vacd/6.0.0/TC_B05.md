# TC B 05 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC B 05**

## TC B 05

## Test Case B 05: Pregnancy

### Precondition

There is a ImmunizationAdministration document with different Immunization entries for the patient the ehealth ecosystem.

### Sequence

The practitioner HCP1 creates a ImmunizationAdministration document with an entry declaring the pregnancy of the female patient and stores it to the ehealth ecosystem.

### Result

The status of pregnancy can be found as condition entries in the vaccination status of the patient in the ehealth ecosystem.

### Documents

* [B_D1_HCP1_C1](Bundle-B-D1-HCP1-C1.md)
* [B_D6_HCP1_C1](Bundle-B-D6-HCP1-C1.md)
* [Result. Document B 05](Bundle-RDB05.md)
* [Result. Document B 05b](Bundle-RDB05b.md)

### Entries

* [Pregnancy Medical Risk Condition (TCB05_EXPRISK2)](Condition-TCB05-EXPRISK2.md)

