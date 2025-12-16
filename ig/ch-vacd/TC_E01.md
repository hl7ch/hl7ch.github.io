# TC E 01 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC E 01**

## TC E 01

## Test Case E 01: Mergin documents with different language settings

### Precondition

In the ehealth ecosystem of the patient there are several ImmunizationAdministration documents with different languages set.

### Sequence

The patient likes to see his immunization status. The aggergator process merges all document together to an VaccinationRecord. The language of the resulting document should be in the language the patient has set in his portal.

### Result

The patient requesting for the document sees the document with the merge result in his language (de-CH) which is set in his settings on the application.

### Documents

* [E_D1_HCP1_C1](Bundle-E-D1-HCP1-C1.md)
* [E_D2_HCP1_C1](Bundle-E-D2-HCP1-C1.md)
* [Result. Document E 01](Bundle-RDE01.md)
* [Result. Document E 01b](Bundle-RDE01b.md)

### Entries

* [Immunization (TCE01_IMMUN1-fr)](Immunization-TCE01-IMMUN1-fr.md)
* [Immunization (TCE01_IMMUN2-fr)](Immunization-TCE01-IMMUN2-fr.md)
* [Immunization (TCE01_IMMUN1-de)](Immunization-TCE01-IMMUN1-de.md)
* [Immunization (TCE01_IMMUN2-de)](Immunization-TCE01-IMMUN2-de.md)
* [Past Illness (TCB02_UNDILL1)](Condition-TCB02-UNDILL1.md)
* [Past Illness (TCE01_UNDILL1_de)](Condition-TCE01-UNDILL1-de.md)

